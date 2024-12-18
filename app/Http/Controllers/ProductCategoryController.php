<?php

namespace App\Http\Controllers;

use App\Models\ProductCategories;
use App\Models\ProductSuperCategories;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    // Display a listing of active categories
    public function index()
    {
        $categories = ProductCategories::where('status', 'active')
            ->with('superCategory')
            ->withCount('products') // Assuming a products relationship exists
            ->get();

        return view('admin.productCategories', compact('categories'));
    }

    // Show the form for creating a new category
    public function create()
    {
        $superCategories = ProductSuperCategories::where('status', 'active')->get();

        return view('admin.productCategoriesForm', compact('superCategories'));
    }

    // Store a newly created category in storage
    public function store(Request $request)
    {
        $request->validate([
            'cat_name' => 'required|string|max:255',
            'super_category_id' => 'required|exists:product_super_categories,id',
            'img_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        $imageName = time() . '.' . $request->img_url->extension();
        $request->img_url->move(public_path('catImages'), $imageName);
        $imgPath = '/catImages/' . $imageName;

        // Create the category
        ProductCategories::create([
            'cat_name' => $request->cat_name,
            'super_category_id' => $request->super_category_id,
            'img_url' => $imgPath,
            'status' => 'active',
        ]);

        return redirect()->route('categories.index')->with('success', 'Category added successfully!');
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
            'img_url' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('img_url')) {
            if (file_exists(public_path($category->img_url))) {
                unlink(public_path($category->img_url));
            }

            $imageName = time() . '.' . $request->img_url->extension();
            $request->img_url->move(public_path('catImages'), $imageName);
            $category->img_url = '/catImages/' . $imageName;
        }

        $category->update([
            'cat_name' => $request->cat_name,
            'super_category_id' => $request->super_category_id,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category Updated Successfully');
    }
}
