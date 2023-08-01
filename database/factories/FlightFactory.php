<?php

namespace Database\Factories;

use App\Models\Flight;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'from' => fake()->address,
            'to' => fake()->address,
            'departure_time' => fake()->dateTime,
            'arrival_time' => fake()->dateTime,
            'status' => fake()->randomElement(['scheduled', 'delayed', 'departed', 'in-air', 'landed', 'arrived', 'cancelled']),
            'user_id' => User::role('customer')->inRandomOrder()->value('id') ?? User::first()->id
        ];
    }
}
