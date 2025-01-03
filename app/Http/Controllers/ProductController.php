<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Products;
use App\Models\ProductCategories;


class ProductController extends Controller
{
    public function create()
    {
        $categories = ProductCategories::where('status', 'active')->get();
        return view('admin.productsForm', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'prod_name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:product_categories,id',
            'img1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'img2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'img3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $product = new Products();
        $product->pro_name = $request->prod_name;
        $product->pro_description = $request->description;
        $product->unit_price = $request->price;
        $product->category_id = $request->category_id;
        $product->isSriLanka = $request->has('isSriLanka') ? 1 : 0;
        $product->isIndonesia = $request->has('isIndonesia') ? 1 : 0;
        $product->isMalaysia = $request->has('isMalasiya') ? 1 : 0;

        if ($request->hasFile('img1')) {
            $product->img1_url = $this->uploadImage($request->file('img1'));
        }
        if ($request->hasFile('img2')) {
            $product->img2_url = $this->uploadImage($request->file('img2'));
        }
        if ($request->hasFile('img3')) {
            $product->img3_url = $this->uploadImage($request->file('img3'));
        }

        $product->save();

        return redirect()->route('products.view')->with('success', 'Product added successfully!');
    }

    public function getProducts()
    {
        $products = Products::with(['category.superCategory'])
            ->where('status', '!=', 'delete')
            ->get();

        $data = $products->map(function ($product, $index) {
            return [
                'id' => $index + 1,
                'pro_name' => $product->pro_name,
                'unit_price' => $product->unit_price,
                'category_name' => $product->category ? $product->category->cat_name : 'N/A',
                'super_category_name' => $product->category && $product->category->superCategory
                    ? $product->category->superCategory->name
                    : 'N/A',
                'status' => $product->status ?? 'N/A',
                'isSriLanka' => $product->isSriLanka ? 'Available' : 'Unavailable',
                'isIndonesia' => $product->isIndonesia ? 'Available' : 'Unavailable',
                'isMalaysia' => $product->isMalaysia ? 'Available' : 'Unavailable',
            ];
        });

        return response()->json(['data' => $data]);
    }

    public function delete($id)
    {
        $product = Products::find($id);

        if ($product) {
            $product->status = 'delete';
            $product->save();

            return response()->json(['success' => true, 'message' => 'Product deleted successfully.']);
        }

        return response()->json(['success' => false, 'message' => 'Product not found.'], 404);
    }

    public function edit($id)
    {
        $product = Products::find($id);

        if (!$product) {
            return redirect()->route('products.view')->with('error', 'Product not found');
        }
        $categories = ProductCategories::where('status', 'active')->get();

        return view('admin.productsEditForm', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);

        $request->validate([
            'prod_name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|integer',
            'img1' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'img2' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'img3' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $product->pro_name = $request->prod_name;
        $product->pro_description = $request->description;
        $product->unit_price = $request->price;
        $product->category_id = $request->category_id;

        $product->isSriLanka = $request->has('isSriLanka') ? 1 : 0;
        $product->isIndonesia = $request->has('isIndonesia') ? 1 : 0;
        $product->isMalaysia = $request->has('isMalaysia') ? 1 : 0;

        if ($request->hasFile('img1')) {
            $product->img1_url = $this->uploadImage($request->file('img1'), $product->img1_url);
        }

        if ($request->hasFile('img2')) {
            $product->img2_url = $this->uploadImage($request->file('img2'), $product->img2_url);
        }

        if ($request->hasFile('img3')) {
            $product->img3_url = $this->uploadImage($request->file('img3'), $product->img3_url);
        }

        $product->save();

        return redirect()->route('products.view')->with('success', 'Product updated successfully.');
    }

    private function uploadImage($image)
    {
        $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('productImages');

        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        $image->move($destinationPath, $imageName);
        return '/productImages/' . $imageName;
    }

    public function malaysia()
    {
        $products = Products::where('products.status', 'active')
            ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->select('products.*', 'product_categories.super_category_id')
            ->where('isMalaysia', 1)
            ->get();

        return view('AquaVist.pages.testProducts', compact('products'));
    }
}
