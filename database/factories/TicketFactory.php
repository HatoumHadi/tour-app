<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ticket>
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
            'departure_date' => $date,
            'arrival_date' => fake()->dateTimeBetween($date, '+1 year'),
            'departure_from' => fake()->name,
            'arrival_to' => fake()->name,
            'airline' => fake()->name,
            'flight_number' => fake()->name,
            'seat_number' => fake()->numberBetween(1, 200),
            'price' => fake()->numberBetween(1, 1000),
            'user_id' => User::inRandomOrder()->value('id'),
        ];
    }
}
