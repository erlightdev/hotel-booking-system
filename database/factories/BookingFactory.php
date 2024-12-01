<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\;
use App\Models\Booking;
use App\Models\User;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'room_id' => ::factory(),
            'check_in_date' => $this->faker->date(),
            'check_out_date' => $this->faker->date(),
            'total_guests' => $this->faker->numberBetween(-10000, 10000),
            'total_price' => $this->faker->word(),
            'status' => $this->faker->randomElement(["pending","confirmed","checked_in","checked_out","cancelled"]),
            'booking_reference' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'special_requests' => $this->faker->text(),
        ];
    }
}
