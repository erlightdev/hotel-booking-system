<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Hotel;

class HotelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hotel::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'address' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'city' => $this->faker->city(),
            'state' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'country' => $this->faker->country(),
            'total_rooms' => $this->faker->numberBetween(-10000, 10000),
            'star_rating' => $this->faker->word(),
            'contact_email' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'contact_phone' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'is_active' => $this->faker->boolean(),
            'amenities' => '{}',
        ];
    }
}
