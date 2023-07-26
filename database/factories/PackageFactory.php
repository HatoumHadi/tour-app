<?php

namespace Database\Factories;

use App\Models\Package;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name,
            'description' => fake()->sentence,
            'date' => fake()->date,
            'duration' => fake()->numberBetween(1, 24),
            'price' => fake()->numberBetween(1, 10000),
            'type' => fake()->randomElement(['basic', 'standard', 'premium']),
            'user_id' => User::inRandomOrder()->value('id')
        ];
    }
}
