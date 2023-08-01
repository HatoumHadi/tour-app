<?php

namespace Database\Factories;

use App\Models\Package;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        $title = fake()->words(asText: true);
        $slug = Str::slug($title);
        $imageName = "packages/$slug.png";
        Storage::put("public/$imageName", file_get_contents(fake()->imageUrl()));
        return [
            'title' => $title,
            'slug' => $slug,
            'description' => fake()->sentence,
            'date' => fake()->date,
            'duration' => fake()->numberBetween(1, 24),
            'price' => fake()->numberBetween(1, 10000),
            'type' => fake()->randomElement(['basic', 'standard', 'premium']),
            'thumbnail' => $imageName,
        ];
    }
}
