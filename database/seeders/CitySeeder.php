<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create([
            'name' => 'Beirut',
            'country_id' => '1',
        ]);

        City::create([
            'name' => 'New York',
            'country_id' => '2',
        ]);

        City::create([
            'name' => 'Paris',
            'country_id' => '3',
        ]);
    }
}
