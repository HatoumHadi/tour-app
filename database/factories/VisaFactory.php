<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visa>
 */
class VisaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'phone' => fake()->phoneNumber,
            'application_date' => fake()->date,
            'status' => fake()->randomElement( ['valid', 'expired', 'approved', 'denied', 'pending', 'revoked', 'overstay']),
            'user_id' => User::inRandomOrder()->value('id'),
        ];
    }
}
