<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
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
            'name' => fake()->name,
            'phone' => fake()->phoneNumber,
            'email' => fake()->email,
            'rating' => fake()->numberBetween(1,5),
            'departure_date' => $date,
            'arrival_date' => fake()->dateTimeBetween($date, '+1 year'),
            'departure_from' => fake()->name,
            'arrival_to' => fake()->name,
            'airline' => fake()->name,
            'flight_number' => fake()->name,
            'seat_number' => fake()->numberBetween(1,200),
            'price' => fake()->numberBetween(1,1000),
            'user_id' => User::inRandomOrder()->value('id'),
        ];
    }
}
