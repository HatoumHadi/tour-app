<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\PhotoGallery;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarRental>
 */
class CarRentalFactory extends Factory
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
            'type' => fake()->randomElement(['sedan', 'suv', 'coupe', 'minivan', 'luxury car', 'off-road vehicle']),
            'start_date' => $date,
            'end_date' => fake()->dateTimeBetween($date, '+1 year'),
            'num_of_days' => fake()->numberBetween(1,30),
            'price' => fake()->numberBetween(1,2000),
            'user_id' => User::inRandomOrder()->value('id'),
            'photo_gallery_id' => null,
        ];
    }
}
