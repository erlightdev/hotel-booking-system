<?php

namespace Database\Seeders;

use App\Models\RoomSeeder;
use Illuminate\Database\Seeder;

class RoomSeederSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoomSeeder::factory()->count(5)->create();
    }
}
