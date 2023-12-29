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
            'name' => 'Fahrezi Rizqiawan',
            'department_id' => 12,
            'email' => 'fahrezirizqiawan12649@gmail.com',
            'phone_number' => '089662690020',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Oman Narpati',
            'department_id' => 1,
            'email' => 'oman@gmail.com',
            'phone_number' => '089662690020',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Panca Dongoran',
            'department_id' => 2,
            'email' => 'panca@gmail.com',
            'phone_number' => '089662690020',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Sidiq Mansur',
            'department_id' => 10,
            'email' => 'sidiq@gmail.com',
            'phone_number' => '089662690020',
            'password' => Hash::make('password'),
        ]);
    }
}
