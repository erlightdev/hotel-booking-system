<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Array of users to create
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'admin',
            ],
            [
                'name' => 'user',
                'email' => 'user@example.com',
                'password' => Hash::make('doctor'),
                'role' => 'guest',
            ],
        ];

        // Loop through and create each user
        foreach ($users as $userData) {
            User::factory()->create($userData);
        }
    }
}
