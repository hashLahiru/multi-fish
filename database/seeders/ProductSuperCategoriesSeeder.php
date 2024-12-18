<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductSuperCategories;

class ProductSuperCategoriesSeeder extends Seeder
{
    public function run()
    {
        $superCategories = [
            ['name' => 'Freshwater Fish', 'status' => 'active'],
            ['name' => 'Marine Fish', 'status' => 'active'],
            ['name' => 'Aquatic Plants', 'status' => 'active'],
        ];

        foreach ($superCategories as $category) {
            ProductSuperCategories::create($category);
        }
    }
}
