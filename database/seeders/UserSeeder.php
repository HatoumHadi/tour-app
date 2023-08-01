<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);
        $admin->assignRole('super_admin');
        $customer = User::create([
            'name' => 'Customer',
            'email' => 'customer@mail.com',
            'password' => 'password'
        ]);
        $customer->assignRole('customer');
    }
}
