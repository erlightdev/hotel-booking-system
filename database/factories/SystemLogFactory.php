<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\SystemLog;
use App\Models\User;

class SystemLogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SystemLog::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'model' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'model_id' => $this->faker->numberBetween(-10000, 10000),
            'action' => $this->faker->randomElement(["create","update","delete"]),
            'description' => $this->faker->text(),
            'user_role' => $this->faker->randomElement(["guest","admin","staff"]),
            'changed_at' => $this->faker->dateTime(),
        ];
    }
}
