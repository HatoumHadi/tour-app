<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create([
            'name' => 'Lebanon',
            'code' => 'LB',
            'has_visa' => true,
            'has_ticket' => true,
            'has_adventure' => true,
            'has_hotel' => true,
            'has_packages' => true,
        ]);

        Country::create([
            'name' => 'United state',
            'code' => 'US',
            'has_visa' => true,
            'has_ticket' => true,
            'has_adventure' => true,
            'has_hotel' => true,
            'has_packages' => true,
        ]);

        Country::create([
            'name' => 'France',
            'code' => 'FR',
            'has_visa' => true,
            'has_ticket' => true,
            'has_adventure' => true,
            'has_hotel' => true,
            'has_packages' => true,
        ]);
    }
}
