<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AboutUsSeeder::class,
            ShieldSeeder::class,
            UserSeeder::class,
            GeneralInfoSeeder::class,
            LanguageSeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
            AdventureSeeder::class,
            CarRentalSeeder::class,
            PackageSeeder::class,
            PlaceSeeder::class,
            TicketSeeder::class,
            HotelSeeder::class,
            TransportationSeeder::class,
            TravelInsuranceSeeder::class,
            VisaSeeder::class,
            FlightSeeder::class,
        ]);
    }
}
