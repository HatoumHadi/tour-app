<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Country;
use App\Models\PhotoGallery;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => [
                'en' => fake()->name
            ],
            'address' => [
                'en' => fake()->address
            ],
            'phone' => fake()->phoneNumber,
            'email' => fake()->email,
            'rating' => fake()->numberBetween(1,5),
            'city_id' => City::inRandomOrder()->value('id'),
            'country_id' => Country::inRandomOrder()->value('id'),
        ];
    }
}
