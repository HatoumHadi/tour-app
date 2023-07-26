<?php

namespace Database\Factories;

use App\Models\GeneralInfo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Storage;

/**
 * @extends Factory<GeneralInfo>
 */
class GeneralInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name;
        $slug = Str::slug($name);
        $imageName = "general_infos/$slug.png";
        Storage::put("public/$imageName", file_get_contents(fake()->imageUrl()));
        return [
            'name' => $name,
            'logo' => $imageName,
            'email' => fake()->email,
            'copy_right' => fake()->sentence,
        ];
    }
}
