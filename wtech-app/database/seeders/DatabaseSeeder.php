<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\File;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Order;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // make sure that the dummy images folder is empty
        $path = public_path('/images/product-images');
        if (file_exists($path)) {
            try {
                File::deleteDirectory($path);
            } catch (\Exception $e) {
                echo "Error deleting directory: " . $e->getMessage() . "\n";
            }
        }

        $numCategories = 5;
        $numProducts = 20;
        $numProductImages = 5;

        $numUsers = 10;
        $numOrders = 10;

        // Arrays to store all categories, payment types, and delivery types
        $categories = [];
        $paymentTypes = [];
        $deliveryTypes = [];
        $products = [];
        $users = [];

        // Create 2 admins
        (new UserSeeder())->run();

        // create all categories and save them in an array
        for ($i = 0; $i < $numCategories; $i++) {
            $categories[] = Category::factory()->create([
                'name' => 'Category ' . ($i + 1),
            ]);
        }

        // create all payment types and save them in an array
        $paymentTypes = (new PaymentTypeSeeder())->run();

        // create all delivery types and save them in an array
        $deliveryTypes = (new DeliveryTypeSeeder())->run();

        // create all products and attach random categories to each product
        for ($i = 0; $i < $numProducts; $i++) {
            $products[] = Product::factory()->create();

            // attach random categories to each product
            $randomCategories = array_rand($categories, rand(1, $numCategories));

            if (!is_array($randomCategories)) {
                $randomCategories = [$randomCategories];
            }

            foreach ($randomCategories as $category) {
                $products[$i]->categories()->attach($categories[$category]);
            }
        }

        // seed the product images
        $this->seedProductImages($numProducts, $numProductImages, $products);

        // create all users and save them in an array
        for ($i = 0; $i < $numUsers; $i++) {
            $users[] = User::factory()->create();
        }

        // create all orders and attach random products to each order and random users to each order
        for ($i = 0; $i < $numOrders; $i++) {
            // generate random number of products for each order
            $numProductsInOrder = rand(1, $numProducts);

            // generate random quantity for each product in the order
            $quantities = [];
            for ($j = 0; $j < $numProductsInOrder; $j++) {
                $quantities[] = ['quantity' => rand(1, 5)];
            }

            // get random product keys
            $randomProductKeys = array_rand($products, $numProductsInOrder);

            // if only one product is selected, convert $randomProductKeys to an array
            if (!is_array($randomProductKeys)) {
                $randomProductKeys = [$randomProductKeys];
            }

            // get corresponding product IDs
            $randomProductIds = [];
            foreach ($randomProductKeys as $key) {
                $randomProductIds[] = $products[$key]->id;
            }

            // print out the values of $randomProductIds and $quantities
            echo "randomProductIds: ";
            print_r($randomProductIds);
            echo "\nquantities: ";
            print_r($quantities);
            echo "\n";

            // create pivot data
            $pivotData = array_combine($randomProductIds, $quantities);

            // create order and attach products
            Order::factory()->create([
                'user_id' => $users[array_rand($users)]->id,
                'payment_type_id' => $paymentTypes[array_rand($paymentTypes)]->id,
                'delivery_type_id' => $deliveryTypes[array_rand($deliveryTypes)]->id,
            ])->products()->attach($pivotData); // attach products to the order with quantities as pivot data
        }
    }

    /**
     * Seed the images for the products.
     * 
     * @return void
     */
    public function seedProductImages($numProducts, $numProductImages, array $products): void
    {
        // create a faker instance
        $faker = Faker::create();

        // create images for each product
        for ($i = 0; $i < $numProducts; $i++) {
            for ($j = 0; $j < $numProductImages; $j++) {
                $product_id = $products[$i]->id;
                echo "Product ID: " . $product_id . "\n";
                // Define the path where the image will be stored
                $path = public_path("/images/product-images/{$product_id}");

                // Create the directory if it does not exist 
                if (!file_exists($path)) {
                    File::makeDirectory($path, 0777, true, true);
                }

                // Generate a fake image and store it in the new folder
                $imagePath = $faker->image($path, 250, 250, null, false);

                // Combine the path and the image name
                $imagePath = "images/product-images/{$product_id}/{$imagePath}";
                ProductImage::factory()->create([
                    'product_id' => $product_id,
                    'path' => $imagePath,
                    'order' => $j,
                ]);
            }
        }
    }
}
