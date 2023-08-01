<?php

namespace Database\Factories;

use App\Models\TravelInsurance;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TravelInsurance>
 */
class TravelInsuranceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = fake()->date;

        return [
            'plan_name' => fake()->name,
            'policy_number' => fake()->numberBetween(1, 10000),
            'coverage_start_date' => $date,
            'coverage_end_date' => fake()->dateTimeBetween($date, '+1 year')->format('Y-m-d'),
            'insurance_company' => fake()->name,
            'user_id' => User::role('customer')->inRandomOrder()->value('id'),
        ];
    }
}
