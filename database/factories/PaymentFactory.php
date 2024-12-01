<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Booking;
use App\Models\Payment;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'booking_id' => Booking::factory(),
            'amount' => $this->faker->word(),
            'payment_method' => $this->faker->randomElement(["credit_card","debit_card","paypal","bank_transfer","cash"]),
            'transaction_id' => $this->faker->word(),
            'status' => $this->faker->randomElement(["pending","completed","failed"]),
            'paid_at' => $this->faker->dateTime(),
        ];
    }
}
