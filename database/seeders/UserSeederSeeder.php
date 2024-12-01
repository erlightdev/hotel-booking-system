<?php

namespace Database\Seeders;

use App\Models\UserSeeder;
use Illuminate\Database\Seeder;

class UserSeederSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserSeeder::factory()->count(5)->create();
    }
}
