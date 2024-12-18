<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        $categories = ProductCategory::where('status', 'active')->get();
        return view('admin.product-form', compact('categories'));
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

        $product = new Product();
        $product->prod_name = $request->prod_name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->discount = $request->discount ?? 0;
        $product->is_popular = $request->has('is_popular') ? 1 : 0;

        // Handle image uploads
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

        return response()->json(['success' => 'Product added successfully!']);
    }

    public function getProducts()
    {
        $products = Product::with('category')
            ->where('status', '!=', 'delete')
            ->get();

        $data = $products->map(function ($product, $index) {
            return [
                'id' => $index + 1,
                'prod_name' => $product->prod_name,
                'price' => $product->price,
                'category_id' => $product->category ? $product->category->id,
                'category' => $product->category ? $product->category->cat_name : 'N/A',
                'is_popular' => $product->is_popular ? 'Yes' : 'No',
                'status' => $product->status ?? 'N/A',
                'images' => array_filter([$product->img1_url, $product->img2_url, $product->img3_url]),
            ];
        });

        return response()->json(['data' => $data]);
    }

    public function delete(Request $request)
    {
        $productId = $request->input('id');

        $product = Product::find($productId);

        if ($product) {
            $product->status = 'delete';
            $product->save();

            return response()->json(['success' => true, 'message' => 'Product Deleted']);
        }

        return response()->json(['success' => false, 'message' => 'Product not found.'], 404);
    }

    public function edit($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('product.get')->with('error', 'Product Not Found');
        }

        $categories = ProductCategory::where('status', 'active')->get();

        return view('admin.product-form-edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'prod_name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'img1' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'img2' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'img3' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $product->prod_name = $request->prod_name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;

        if ($request->hasFile('img1')) {
            if ($product->img1_url && file_exists(public_path($product->img1_url))) {
                unlink(public_path($product->img1_url));
            }
            $product->img1_url = $this->uploadImage($request->file('img1'));
        } elseif ($request->has('remove_img1') && $request->remove_img1 == '1') {
            if ($product->img1_url && file_exists(public_path($product->img1_url))) {
                unlink(public_path($product->img1_url));
            }
            $product->img1_url = null;
        }

        if ($request->hasFile('img2')) {
            if ($product->img2_url && file_exists(public_path($product->img2_url))) {
                unlink(public_path($product->img2_url));
            }
            $product->img2_url = $this->uploadImage($request->file('img2'));
        } elseif ($request->has('remove_img2') && $request->remove_img2 == '1') {
            if ($product->img2_url && file_exists(public_path($product->img2_url))) {
                unlink(public_path($product->img2_url));
            }
            $product->img2_url = null;
        }

        if ($request->hasFile('img3')) {
            if ($product->img3_url && file_exists(public_path($product->img3_url))) {
                unlink(public_path($product->img3_url));
            }
            $product->img3_url = $this->uploadImage($request->file('img3'));
        } elseif ($request->has('remove_img3') && $request->remove_img3 == '1') {
            if ($product->img3_url && file_exists(public_path($product->img3_url))) {
                unlink(public_path($product->img3_url));
            }
            $product->img3_url = null;
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
}
