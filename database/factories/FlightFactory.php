<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
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
        $departureCity = City::inRandomOrder()->first();
        return [
            'airline' => fake()->name,
            'flight_number' => fake()->numberBetween(100, 10000),
            'departure_airport' => fake()->name,
            'departure_city_id' => $departureCity->id,
            'departure_time' => fake()->dateTime(),
            'arrival_airport' => fake()->name,
            'arrival_city_id' => City::inRandomOrder()->whereNot('name', $departureCity->name)->value('id'),
            'arrival_time' => fake()->dateTime(),
            'duration' => fake()->numberBetween(1,24),
            'aircraft_type' => fake()->randomElement(['ICAO', 'EASA']),
            'price' => fake()->numberBetween(100, 3000),
            'status' => fake()->randomElement(['Scheduled', 'Delayed', 'Departed', 'In Air', 'Landed', 'Arrived', 'Cancelled']),
            'date' => fake()->dateTime,
        ];
    }
}
