<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SettingSeeder::class,
            ShieldSeeder::class,
            UserSeeder::class,
            AboutUsSeeder::class,
            AdventureSeeder::class,
            CountrySeeder::class,
            FlightSeeder::class,
            LanguageSeeder::class,
            LanguageLineSeeder::class,
            PackageSeeder::class,
            TravelInsuranceSeeder::class,
            VisaSeeder::class,
        ]);
    }
}
