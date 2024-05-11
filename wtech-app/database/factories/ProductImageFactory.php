<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Product;
use Illuminate\Support\Facades\File;


class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'product_id' => function (array $attributes) {
                $product_id = $attributes['product_id'] ?? Product::factory()->create()->id;

                // Define the path where the image will be stored
                $path = public_path("/images/product-images/{$product_id}");
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true, true); // DEV setting Create the directory if it does not exist 
                }

                // Generate a fake image and store it in the new folder
                $imagePath = $this->faker->image($path, 640, 480, null, false);

                // combine the path and the image name
                $imagePath = "public/images/product-images/{$product_id}/{$imagePath}";

                return $product_id;
            },
            'path' => function (array $attributes) {
                return "public/images/product-images/{$attributes['product_id']}/{$this->faker->image}";
            },
            'order' => $this->faker->unique()->numberBetween(0, 5),
        ];
    }
}


// /**
//  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
//  */
// class ProductImageFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */

//     public function definition(): array
//     {
//         $product_id = $this->product_id ?? Product::factory()->create()->id;

//         // Define the path where the image will be stored
//         $path = public_path("/images/product-images/{$product_id}");
//         if (!file_exists($path)) {
//             File::makeDirectory($path, 0777, true, true); // DEV setting Create the directory if it does not exist 
//         }

//         // Generate a fake image and store it in the new folder
//         $imagePath = $this->faker->image($path, 640, 480, null, false);

//         // Generate an order in sequence starting from 0
//         // $order = $this->faker->unique()->numberBetween(0, 5);

//         // combine the path and the image name
//         $imagePath = "public/images/product-images/{$product_id}/{$imagePath}";
//         echo $imagePath;

//         return [
//             'product_id' => Product::factory()->create()->id,
//             'path' => $imagePath,
//             'order' => $this->faker->unique()->numberBetween(0, 5),
//         ];
//     }
// }
