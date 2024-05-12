<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentType;
use Faker\Factory as Faker;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): array
    {
        // PaymentType::factory(3)->create(); // Create 3
        $faker = Faker::create();

        // The code below is essentially the same as the code above as the factory already creates unique names for each PaymentType 
        $allPaymentTypes = [
            'credit card',
            'paypal',
            'cash on delivery',
        ];

        $paymentTypes = [];

        foreach ($allPaymentTypes as $paymentType) {
            $paymentTypes[] = PaymentType::firstOrCreate([
                'name' => $paymentType,
                'price' => $faker->randomFloat(2, 0, 100),
            ]);
        }

        return $paymentTypes;
    }
}
