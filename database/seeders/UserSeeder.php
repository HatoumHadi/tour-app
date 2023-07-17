<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      User::create([
          'name' => 'admin',
          'email' => 'admin@admin.com',
          'password' => 'password',
//          'role_id' => Role::where('slug','admin')->value('id'),
      ]);
    }
}
