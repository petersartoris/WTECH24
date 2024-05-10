<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaymentType;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): array
    {
        // PaymentType::factory(3)->create(); // Create 3

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

            ]);
        }

        return $paymentTypes;
    }
}
