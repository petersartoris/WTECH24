<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // orders will be created in the DatabaseSeeder

        // create random product and store it
        $product = Product::factory()->create();

        // create 5 images for the product
        for ($i = 0; $i < 5; $i++) {
            ProductImage::factory()->create([
                'prod_id' => $product->id,
            ]);
        }
    }
}
