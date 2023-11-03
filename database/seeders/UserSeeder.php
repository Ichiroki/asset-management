<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Fahrezi Rizqiawan",
            'department_id' => 1,
            'position_id' => 1,
            'email' => "fahrezi@gmail.com",
            'password' => Hash::make('password'),
        ]);
    }
}
