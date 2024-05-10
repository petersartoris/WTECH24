<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PaymentType;
use Exception;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentType>
 */
class PaymentTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $paymentType = PaymentType::inRandomOrder()->first();

        if ($paymentType === null) {
            throw new Exception('No PaymentType instances exist. Please run the PaymentTypeSeeder.');
        }

        return [
            'name' => $paymentType->name,
        ];
    }
}
