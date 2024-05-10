<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create 3 products with a specific category
        // Product::factory()->create([
        //     'name' => 'Product 1',
        //     'price' => 100,
        // ]);

        // Product::factory()->create([
        //     'name' => 'Product 2',
        //     'price' => 200,
        // ]);

        // Product::factory()->create([
        //     'name' => 'Product 3',
        //     'price' => 300,
        // ]);


        // Product::factory(10)->create(); // Create 10 products which will have random names, prices, and categories
    }
}
