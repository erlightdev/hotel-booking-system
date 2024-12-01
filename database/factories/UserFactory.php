<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'password' => $this->faker->password(),
            'avatar' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'role' => $this->faker->randomElement(["guest","admin","staff"]),
            'email_verified_at' => $this->faker->dateTime(),
            'last_login_at' => $this->faker->dateTime(),
        ];
    }
}
