<?php

namespace Database\Factories;

use App\Models\GeneralInfo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        $name = "Runway";
        $slug = Str::slug($name);
        $imageName = "general_infos/$slug.png";
        Storage::put("public/$imageName", file_get_contents(fake()->imageUrl()));
        return [
            'name' => $name,
            'phone' => fake()->phoneNumber,
            'description' => fake()->paragraph(5),
            'logo' => $imageName,
            'email' => "Runway@admin.com",
            'copy_right' => "Copyright © 2023 All Rights Reserved",
        ];
    }
}
