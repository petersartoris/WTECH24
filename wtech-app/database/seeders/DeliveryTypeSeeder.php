<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DeliveryType;

class DeliveryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DeliveryType::factory(3)->create(); // Create 3 delivery types which will have these names: standard, express, next day

        // The code below is essentially the same as the code above as the factory already creates unique names for each DeliveryType 
        // DeliveryType::factory()->create([
        //     'name' => 'standard',
        // ]);

        // DeliveryType::factory()->create([
        //     'name' => 'express',
        // ]);

        // DeliveryType::factory()->create([
        //     'name' => 'next day',
        // ]);
    }
}
