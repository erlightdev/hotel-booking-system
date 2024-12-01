<?php

namespace Database\Seeders;

use App\Models\AmenitySeeder;
use Illuminate\Database\Seeder;

class AmenitySeederSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AmenitySeeder::factory()->count(5)->create();
    }
}
