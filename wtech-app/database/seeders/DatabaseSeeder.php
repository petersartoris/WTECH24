<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();
        // $this->call([
        //     UserSeeder::class, // creates 2 admins. Users will be created here.
        //     ProductSeeder::class, // creates 3 products. Other products will be created here.
        //     ProductImageSeeder::class,
        //     OrderSeeder::class,

        // ]);

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
        for ($i = 0; $i < $numPaymentTypes; $i++) {
            $paymentTypes[] = PaymentType::factory()->create();
        }

        // create all delivery types and save them in an array
        for ($i = 0; $i < $numDeliveryTypes; $i++) {
            $deliveryTypes[] = DeliveryType::factory()->create();
        }

        // create all products, images and attach random categories to each product
        for ($i = 0; $i < $numProducts; $i++) {
            $products[] = Product::factory()->create();

            ProductImage::factory()->count($numProductImages)->create([
                'product_id' => $products[$i]->id,
            ]);

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
            for ($j = 0; $j < $numProductsInOrder; $j++) {
                $quantities[] = rand(1, 5);
            }

            // get random products
            $randomProducts = array_rand($products, $numProductsInOrder);

            if (!is_array($randomProducts)) {
                $randomProducts = [$randomProducts];
            }

            Order::factory()->create([
                'user_id' => $users[array_rand($users)]->id,
                'payment_type_id' => $paymentTypes[array_rand($paymentTypes)]->id,
                'delivery_type_id' => $deliveryTypes[array_rand($deliveryTypes)]->id,
            ])->products()->attach(array_combine($randomProducts, $quantities)); // attach products to the order with quantities as pivot data
        }
    }
}
