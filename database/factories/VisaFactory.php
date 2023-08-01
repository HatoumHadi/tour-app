<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\User;
use App\Models\Visa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Visa>
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
            'passport_number' => fake()->randomNumber(5),
            'visa_country_id' => Country::inRandomOrder()->value('id'),
            'nationality_country_id' => Country::inRandomOrder()->value('id'),
            'application_date' => fake()->date,
            'status' => fake()->randomElement(['valid', 'expired', 'approved', 'denied', 'pending', 'revoked', 'overstay']),
            'user_id' => User::role('customer')->inRandomOrder()->value('id'),
        ];
    }
}
