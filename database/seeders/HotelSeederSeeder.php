<?php

namespace Database\Seeders;

use App\Models\HotelSeeder;
use Illuminate\Database\Seeder;

class HotelSeederSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HotelSeeder::factory()->count(5)->create();
    }
}
