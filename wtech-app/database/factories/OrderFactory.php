<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\PaymentType;
use App\Models\DeliveryType;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create()->id, // use user factory to create a user and get its id
            'payment_type_id' => PaymentType::inRandomOrder()->first()->id, // use payment type factory to create a payment type and get its id
            'delivery_type_id' => PaymentType::inRandomOrder()->first()->id, // use delivery type factory to create a delivery type and get its id
            'status' => $this->faker->randomElement(['pending', 'processing', 'completed', 'cancelled']),
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'zip_code' => $this->faker->postcode,
            'phone_number' => $this->faker->phoneNumber,
        ];
    }
}
