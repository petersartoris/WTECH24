<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\DeliveryType;
use Exception;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeliveryType>
 */
class DeliveryTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $deliveryType = DeliveryType::inRandomOrder()->first();

        if ($deliveryType === null) {
            throw new Exception('No DeliveryType instances exist. Please run the DeliveryTypeSeeder.');
        }

        return [
            // 'name' => $this->faker->unique()->randomElement(['standard', 'express', 'next day']),
            'name' => $deliveryType->name,
            'price' => $deliveryType->price, // this is set by the DeliveryTypeSeeder NOT ideal
        ];
    }
}
