<?php

namespace App\Http\Controllers;

use App\Models\ProductCategories;
use App\Models\ProductSuperCategories;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategories::where('status', 'active')
            ->with('superCategory')
            ->withCount('products')
            ->get();

        return view('admin.productCategories', compact('categories'));
    }

    public function create()
    {
        $superCategories = ProductSuperCategories::where('status', 'active')->get();

        return view('admin.productCategoriesForm', compact('superCategories'));
    }

    public function save(Request $request)
    {
        try {
            $request->validate([
                'cat_name' => 'required|string|max:255',
                'super_category_id' => 'required|exists:product_super_categories,id',
                'img_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $imageName = time() . '.' . $request->img_url->extension();
            $request->img_url->move(public_path('catImages'), $imageName);
            $imgPath = '/catImages/' . $imageName;

            ProductCategories::create([
                'cat_name' => $request->cat_name,
                'super_category_id' => $request->super_category_id,
                'img_url' => $imgPath,
                'status' => 'active',
            ]);

            return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
            // return response()->json(['success' => true, 'message' => 'Category added successfully!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    // Soft-delete a category
    public function delete($id)
    {
        $category = ProductCategories::findOrFail($id);
        $category->update(['status' => 'delete']);

        return response()->json(['success' => true]);
    }

    public function edit($id)
    {
        $category = ProductCategories::findOrFail($id);
        $superCategories = ProductSuperCategories::where('status', 'active')->get();

        return view('admin.productCategoriesEditForm', compact('category', 'superCategories'));
    }

    public function update(Request $request, $id)
    {
        $category = ProductCategories::findOrFail($id);

        $request->validate([
            'cat_name' => 'required|string|max:255',
            'super_category_id' => 'required|exists:product_super_categories,id',
            'img_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('img_url')) {
            // Remove old image if exists
            if ($category->img_url && file_exists(public_path($category->img_url))) {
                unlink(public_path($category->img_url));
            }

            $imageName = time() . '.' . $request->img_url->extension();
            $request->img_url->move(public_path('catImages'), $imageName);
            $category->img_url = '/catImages/' . $imageName;
        }

        $category->update([
            'cat_name' => $request->cat_name,
            'super_category_id' => $request->super_category_id,
            'img_url' => $category->img_url, // Ensure image is updated if provided
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }
}
