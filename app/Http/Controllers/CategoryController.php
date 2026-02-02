<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {


        $categories = Category::orderBy('name')
            ->paginate(config('app.pagination'));

        return view('store.categories.index', compact('categories'));
    }

    public function create()
    {

        return view('store.categories.create');
    }

    public function store(Request $request)
    {

        try {
            $validator = $this->validateData($request);

            if (!$validator->status) {
                return redirect()->back()
                    ->withErrors($validator->errors)
                    ->withInput();
            }

            DB::beginTransaction();

            $category       = new Category();
            $category->name = $request->name;
            $category->slug = Str::slug($request->name) . '-' . uniqid();
            $category->save();

            DB::commit();

            toast('Category added successfully', 'success');
            return redirect()->route('categories.index');
        } catch (\Throwable $e) {
            DB::rollBack();
            toast('An error occurred while processing', 'error');
            return back()->withInput();
        }
    }

    public function show($id)
    {
        if (!Gate::allows('View Store Categories')) {
            abort(401);
        }

        $category = Category::findOrFail($id);

        return view('store.categories.show', compact('category'));
    }

    public function edit($id)
    {


        $category = Category::findOrFail($id);

        return view('store.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {


        try {
            $validator = $this->validateData($request, $id);

            if (!$validator->status) {
                return redirect()->back()
                    ->withErrors($validator->errors)
                    ->withInput();
            }

            DB::beginTransaction();

            $category       = Category::findOrFail($id);
            $category->name = $request->name;

            if ($request->boolean('regenerate_slug')) {
                $category->slug = Str::slug($request->name) . '-' . uniqid();
            }

            $category->save();

            DB::commit();

            toast('Category updated successfully', 'success');
            return redirect()->route('categories.index');
        } catch (\Throwable $e) {
            DB::rollBack();
            toast('An error occurred while updating', 'error');
            return back()->withInput();
        }
    }

    public function destroy($id)
    {



        try {
            $category = Category::findOrFail($id);
            $category->delete();

            toast('Category deleted successfully', 'success');
            return redirect()->route('categories.index');
        } catch (\Throwable $e) {
            toast('An error occurred while processing', 'error');
            return back();
        }
    }

    private function validateData(Request $request, $id = null)
    {
        $validator = Validator::make(
            $request->all(),
            ['name' => 'required|string|max:255'],
            ['name.required' => 'Please enter the category name']
        );

        if ($validator->fails()) {
            return (object)[
                'status' => false,
                'errors' => $validator->errors(),
            ];
        }

        return (object)['status' => true];
    }
}
