<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImage>
 */
class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Create a product and get its id
        $productId = Product::factory()->create()->id;

        // Generate a unique ID for the image
        $imageId = Str::uuid();

        // Define the path where the image will be stored
        $path = "product-images/{$productId}";

        // Create the directory if it doesn't exist
        Storage::disk('public')->makeDirectory($path);

        // Generate a fake image and store it in the new folder
        $imagePath = $this->faker->image(storage_path("app/public/{$path}"), 640, 480, null, false);

        // Rename the image with the unique imageId
        $newImagePath = storage_path("app/public/{$path}/{$imageId}.jpg");
        rename($imagePath, $newImagePath);

        // Generate an order in sequence starting from 0
        $order = $this->faker->unique()->numberBetween(0, 10);

        return [
            'product_id' => $productId,
            'file_path' => "storage/{$path}/{$imageId}.jpg",
            'order' => $order,
        ];
    }
}
