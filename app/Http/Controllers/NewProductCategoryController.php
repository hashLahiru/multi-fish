<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategories;

class NewProductCategoryController extends Controller
{
    public function store(Request $request)
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

            return response()->json(['success' => true, 'message' => 'Category added successfully!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}
