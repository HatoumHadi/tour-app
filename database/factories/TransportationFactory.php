<?php

namespace Database\Factories;

use App\Models\PhotoGallery;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transportation>
 */
class TransportationFactory extends Factory
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
            'type' => fake()->name,
            'company' => fake()->name,
            'departure_date' => $date,
            'return_date' => fake()->dateTimeBetween($date, '+1 year'),
            'from' => fake()->name,
            'to' => fake()->name,
            'user_id' => User::inRandomOrder()->value('id'),
            'photo_gallery_id' => null,
        ];
    }
}
