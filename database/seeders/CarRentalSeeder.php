<?php

namespace Database\Seeders;

use App\Models\CarRental;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarRentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CarRental::factory(2)->create();
    }
}
