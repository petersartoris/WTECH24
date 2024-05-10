<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\File;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\PaymentType;
use App\Models\DeliveryType;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Order;

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
            File::deleteDirectory($path);
        }

        $numCategories = 5;
        $numPaymentTypes = 3;
        $numDeliveryTypes = 3;
        $numProducts = 10;
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

        // create all products, images and attach random categories to each product
        for ($i = 0; $i < $numProducts; $i++) {
            $products[] = Product::factory()->create();

            for ($j = 0; $j < $numProductImages; $j++) {
                echo "Product ID: " . $products[$i]->id . "\n";
                ProductImage::factory()->create([
                    'product_id' => $products[$i]->id,
                    'order' => $j, // order of the image in the product
                ]);
            }

            // ProductImage::factory()->count($numProductImages)->create([
            //     'product_id' => $products[$i]->id,
            // ]);

            // attach random categories to each product
            $randomCategories = array_rand($categories, rand(1, $numCategories));

            if (!is_array($randomCategories)) {
                $randomCategories = [$randomCategories];
            }

            foreach ($randomCategories as $category) {
                $products[$i]->categories()->attach($categories[$category]);
            }
        }

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
            for ($i = 0; $i < $numProductsInOrder; $i++) {
                $quantities[] = rand(1, 5);
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

            // Order::factory()->create([
            //     'user_id' => $users[array_rand($users)]->id,
            //     'payment_type_id' => $paymentTypes[array_rand($paymentTypes)]->id,
            //     'delivery_type_id' => $deliveryTypes[array_rand($deliveryTypes)]->id,
            // ])->products()->attach(array_combine($randomProductIds, )); // attach products to the order with quantities as pivot data
        }
    }
}
