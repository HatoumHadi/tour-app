<?php

namespace Database\Seeders;

use App\Models\TravelInsurance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TravelInsuranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TravelInsurance::factory(3)->create();
    }
}
