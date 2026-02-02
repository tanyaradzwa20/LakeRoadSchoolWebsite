<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Gate::allows('View Store Products')) {
            abort(401);
        }

        $products = Product::with('category')
            ->orderBy('name')
            ->paginate(config('app.pagination'));

        return view('store.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Gate::allows('Add Store Products')) {
            abort(401);
        }

        $categories = Category::orderBy('name')->get();

        if ($categories->isEmpty()) {
            toast('Please create product categories first', 'error');
            return back();
        }

        return view('store.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Gate::allows('Add Store Products')) {
            abort(401);
        }

        try {
            $validator = $this->validateData($request);

            if (!$validator->status) {
                return redirect()->back()
                    ->withErrors($validator->errors)
                    ->withInput();
            }

            DB::beginTransaction();

            $product              = new Product();
            $product->category_id = $request->category_id;
            $product->name        = $request->name;
            $product->slug        = Str::slug($request->name) . '-' . uniqid();
            $product->description = $request->description ?: null;
            $product->price       = $request->price;
            $product->stock       = $request->stock ?? 0;
            $product->is_new      = $request->boolean('is_new');
            $product->on_sale     = $request->boolean('on_sale');
            $product->sale_price  = $product->on_sale ? ($request->sale_price ?: null) : null;

            if ($request->hasFile('image')) {
                // Store in storage/app/public/products
                $path = $request->file('image')->store('products', 'public');
                $product->image = $path;
            }

            $product->save();

            DB::commit();

            toast('Product added successfully', 'success');
            return redirect()->route('products.index');
        } catch (\Throwable $e) {
            DB::rollBack();
            toast('An error occurred while processing', 'error');
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (!Gate::allows('View Store Products')) {
            abort(401);
        }

        $product = Product::with('category')->findOrFail($id);

        return view('store.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if (!Gate::allows('Edit Store Products')) {
            abort(401);
        }

        $product    = Product::findOrFail($id);
        $categories = Category::orderBy('name')->get();

        return view('store.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (!Gate::allows('Edit Store Products')) {
            abort(401);
        }

        try {
            $validator = $this->validateData($request, $id);

            if (!$validator->status) {
                return redirect()->back()
                    ->withErrors($validator->errors)
                    ->withInput();
            }

            DB::beginTransaction();

            $product              = Product::findOrFail($id);
            $product->category_id = $request->category_id;
            $product->name        = $request->name;

            if ($request->boolean('regenerate_slug')) {
                $product->slug = Str::slug($request->name) . '-' . uniqid();
            }

            $product->description = $request->description ?: null;
            $product->price       = $request->price;
            $product->stock       = $request->stock ?? 0;
            $product->is_new      = $request->boolean('is_new');
            $product->on_sale     = $request->boolean('on_sale');
            $product->sale_price  = $product->on_sale ? ($request->sale_price ?: null) : null;

            if ($request->hasFile('image')) {
                if ($product->image && Storage::disk('public')->exists($product->image)) {
                    Storage::disk('public')->delete($product->image);
                }
                $path = $request->file('image')->store('products', 'public');
                $product->image = $path;
            }

            $product->save();

            DB::commit();

            toast('Product updated successfully', 'success');
            return redirect()->route('products.index');
        } catch (\Throwable $e) {
            DB::rollBack();
            toast('An error occurred while updating', 'error');
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (!Gate::allows('Delete Store Products')) {
            abort(401);
        }

        try {
            $product = Product::findOrFail($id);

            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            $product->delete();

            toast('Product deleted successfully', 'success');
            return redirect()->route('products.index');
        } catch (\Throwable $e) {
            toast('An error occurred while processing', 'error');
            return back();
        }
    }

    /**
     * Validate request data.
     */
    private function validateData(Request $request, $id = null)
    {
        $rules = [
            'category_id' => 'required|exists:categories,id',
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => ['required', 'numeric', 'min:0'],
            'stock'       => ['nullable', 'integer', 'min:0'],
            'is_new'      => 'sometimes|boolean',
            'on_sale'     => 'sometimes|boolean',
            'sale_price'  => 'nullable|numeric|min:0',
            'image'       => 'nullable|image|max:2048',
        ];

        $messages = [
            'category_id.required' => 'Please select a category',
            'category_id.exists'   => 'Selected category does not exist',
            'name.required'        => 'Please enter the product name',
            'price.required'       => 'Please enter the product price',
            'price.numeric'        => 'The product price must be a number',
            'stock.integer'        => 'Stock must be a whole number',
            'image.image'          => 'The uploaded file must be an image',
        ];

        if ($request->boolean('on_sale')) {
            $rules['sale_price'] = 'required|numeric|min:0';
            $messages['sale_price.required'] = 'Please enter the sale price for this product';
        }

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return (object)[
                'status' => false,
                'errors' => $validator->errors(),
            ];
        }

        return (object)['status' => true];
    }
}
