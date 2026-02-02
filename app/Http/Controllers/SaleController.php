<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    public function checkout(Request $request)
    {
        $data = $request->validate([
            'items'            => 'required|array|min:1',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity'   => 'required|integer|min:1',
        ]);

        $userId = auth()->id(); // nullable if guests allowed

        $sale = DB::transaction(function () use ($data, $userId) {
            $total    = 0;
            $saleData = ['user_id' => $userId, 'total' => 0, 'status' => 'completed'];
            $sale     = Sale::create($saleData);

            foreach ($data['items'] as $item) {
                $product = Product::lockForUpdate()->find($item['product_id']);

                if ($product->stock < $item['quantity']) {
                    throw new \Exception("Not enough stock for {$product->name}");
                }

                $price    = $product->display_price;
                $subtotal = $price * $item['quantity'];
                $total   += $subtotal;

                // deduct stock
                $product->decrement('stock', $item['quantity']);

                SaleItem::create([
                    'sale_id'    => $sale->id,
                    'product_id' => $product->id,
                    'quantity'   => $item['quantity'],
                    'price'      => $price,
                    'subtotal'   => $subtotal,
                ]);
            }

            $sale->update(['total' => $total]);

            return $sale;
        });

        return response()->json([
            'message' => 'Sale recorded successfully',
            'sale_id' => $sale->id,
        ]);
    }

    public function index()
    {
        $sales = Sale::with('user')->latest()->paginate(20);
        return view('admin.store.sales.index', compact('sales'));
    }

    public function show(Sale $sale)
    {
        $sale->load('items.product', 'user');
        return view('admin.store.sales.show', compact('sale'));
    }
}