<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create 3 users
        // User::factory(3)->create();
        // User::factory()->create([
        //     'name' => 'User 1',
        //     'email' => 'first@user.com',
        //     'password' => 'user1 password',
        // ]);

        // User::factory()->create([
        //     'name' => 'User 2',
        //     'email' => 'second@user.com',
        //     'password' => 'user2 password',
        // ]);

        // User::factory()->create([
        //     'name' => 'User 3',
        //     'email' => 'third@user.com',
        //     'password' => 'user3 password',
        // ]);

        // create 2 admin users
        User::factory()->create([
            'name' => 'Samo',
            'email' => 'samo@admin.com',
            'password' => 'admin1 password',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Peto',
            'email' => 'peto@admin.com',
            'password' => 'admin2 password',
            'role' => 'admin',
        ]);
    }
}
