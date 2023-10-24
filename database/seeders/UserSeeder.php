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
            'position' => 1,
            'email' => "fahrezi@gmail.com",
            'password' => Hash::make('password'),
            'role-asset' => 'User',
            'role-meeting' => 'User'
        ]);
    }
}
