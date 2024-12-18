<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ProductSuperCategoriesSeeder::class,
            ProductCategoriesSeeder::class,
            ProductsSeeder::class,
        ]);
    }
}
