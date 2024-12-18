<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $products = [
            ['pro_name' => 'Common Goldfish', 'pro_description' => 'A hardy and easy-to-care freshwater fish.', 'unit_price' => 10.00, 'discount' => 0, 'category_id' => 1, 'status' => 'active'],
            ['pro_name' => 'Black Moor Goldfish', 'pro_description' => 'A goldfish variety with a unique black color.', 'unit_price' => 15.00, 'discount' => 5, 'category_id' => 1, 'status' => 'active'],
            ['pro_name' => 'Neon Tetra', 'pro_description' => 'A popular freshwater fish with vibrant colors.', 'unit_price' => 2.50, 'discount' => 0, 'category_id' => 2, 'status' => 'active'],
            ['pro_name' => 'Cardinal Tetra', 'pro_description' => 'A beautiful freshwater fish with striking colors.', 'unit_price' => 3.00, 'discount' => 0, 'category_id' => 2, 'status' => 'active'],
            ['pro_name' => 'Ocellaris Clownfish', 'pro_description' => 'The famous "Nemo" fish.', 'unit_price' => 20.00, 'discount' => 5, 'category_id' => 3, 'status' => 'active'],
            ['pro_name' => 'Maroon Clownfish', 'pro_description' => 'A marine fish with a deep red color.', 'unit_price' => 25.00, 'discount' => 0, 'category_id' => 3, 'status' => 'active'],
            ['pro_name' => 'Amazon Frogbit', 'pro_description' => 'A floating plant for aquariums.', 'unit_price' => 5.00, 'discount' => 0, 'category_id' => 5, 'status' => 'active'],
            ['pro_name' => 'Water Wisteria', 'pro_description' => 'A rooted aquatic plant with beautiful leaves.', 'unit_price' => 6.00, 'discount' => 0, 'category_id' => 6, 'status' => 'active'],
        ];

        foreach ($products as $product) {
            Products::create($product);
        }
    }
}
