<?php

namespace App\Http\Controllers;

use App\Models\ProductCategories;

class testProductController extends Controller
{
    public function index()
    {
        // Fetch all categories from the database
        $categories = ProductCategories::where('status', 'active')->get();

        return view('AquaVist.pages.testProducts', compact('categories'));
    }
}
