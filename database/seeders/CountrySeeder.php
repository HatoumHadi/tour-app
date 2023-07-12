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
            'is_visa' => true,
            'is_ticket' => true,
            'is_adventure' => true,
            'is_hotel' => true,
            'is_packages' => true,
        ]);

        Country::create([
            'name' => 'United state',
            'code' => 'US',
            'is_visa' => true,
            'is_ticket' => true,
            'is_adventure' => true,
            'is_hotel' => true,
            'is_packages' => true,
        ]);

        Country::create([
            'name' => 'France',
            'code' => 'FR',
            'is_visa' => true,
            'is_ticket' => true,
            'is_adventure' => true,
            'is_hotel' => true,
            'is_packages' => true,
        ]);
    }
}
