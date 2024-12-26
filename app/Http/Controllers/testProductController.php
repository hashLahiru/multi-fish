<?php
namespace App\Http\Controllers;

use App\Models\ProductCategories;

class testProductController extends Controller
{
    public function index()
    {
        // Fetch all categories from the database
        $categories = ProductCategories::all();

        return view('AquaVist.pages.testProducts', compact('categories'));
    }
}

