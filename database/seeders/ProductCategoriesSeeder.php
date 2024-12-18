<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategories;

class ProductCategoriesSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['cat_name' => 'Goldfish', 'super_category_id' => 1, 'status' => 'active'],
            ['cat_name' => 'Tetras', 'super_category_id' => 1, 'status' => 'active'],
            ['cat_name' => 'Clownfish', 'super_category_id' => 2, 'status' => 'active'],
            ['cat_name' => 'Angelfish', 'super_category_id' => 2, 'status' => 'active'],
            ['cat_name' => 'Floating Plants', 'super_category_id' => 3, 'status' => 'active'],
            ['cat_name' => 'Rooted Plants', 'super_category_id' => 3, 'status' => 'active'],
        ];

        foreach ($categories as $category) {
            ProductCategories::create($category);
        }
    }
}
