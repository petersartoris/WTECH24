<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory()->create([
        //     'name' => 'Category 1',
        // ]);

        // Category::factory()->create([
        //     'name' => 'Category 2',
        // ]);

        // Category::factory()->create([
        //     'name' => 'Category 3',
        // ]);

        // Category::factory(5)->create(); // Create 5 more categories which will have random names and no Products
        // create all categories and save them in an array
        for ($i = 0; $i < 5; $i++) {
            $name = 'Category ' . ($i + 1);
            $categories[] = Category::factory()->create([
                'name' => $name,
                'slug' => Str::slug($name),
            ]);
        }
    }
}
