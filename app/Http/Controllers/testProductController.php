<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ProductCategories;

class testProductController extends Controller
{
    public function index()
    {
        // Fetch all categories from the database
        $products = Products::where('products.status', 'active')
            ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->select('products.*', 'product_categories.super_category_id')
            ->get();
        $categories = ProductCategories::where('status', 'active')->get();

        return view('AquaVist.pages.testProducts', compact('categories', 'products'));
    }
}
