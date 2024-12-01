<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Hotel;
use App\Models\Room;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'hotel_id' => Hotel::factory(),
            'room_number' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'type' => $this->faker->randomElement(["single","double","suite","family","deluxe"]),
            'max_occupancy' => $this->faker->numberBetween(-10000, 10000),
            'base_price' => $this->faker->word(),
            'is_available' => $this->faker->boolean(),
            'description' => $this->faker->text(),
            'amenities' => '{}',
        ];
    }
}
