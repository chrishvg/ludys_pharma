<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'identify' => fake()->unique()->randomNumber(9),
            'identify_type' => 'CI',
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone_number' => fake()->phoneNumber(),
            'address' => fake()->address(),
        ];
    }
}
