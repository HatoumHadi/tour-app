<?php

namespace Database\Seeders;

use App\Models\Adventure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdventureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Adventure::factory(10)->create();
    }
}
