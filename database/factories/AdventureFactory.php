<?php

namespace Database\Factories;

use App\Models\Adventure;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends Factory<Adventure>
 */
class AdventureFactory extends Factory
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
        $imageName = "adventures/$slug.png";
        Storage::put("public/$imageName", file_get_contents(fake()->imageUrl()));
        return [
            'title' => $title,
            'slug' => $slug,
            'description' => fake()->paragraph,
            'content' => fake()->paragraphs(asText: true),
            'thumbnail' => $imageName
        ];
    }
}
