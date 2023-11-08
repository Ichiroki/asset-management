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
            'department_id' => 12,
            'email' => "fahrezirizqiawan12649@gmail.com",
            'phone_number' => '089662690020',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => "Gema Merdeka Goeyardi",
            'department_id' => 1,
            'email' => "gema@astronacci.net",
            'phone_number' => '089662690020',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => "Dedi Setiadi",
            'department_id' => 2,
            'email' => "dedi@astronacci.net",
            'phone_number' => '089662690020',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => "Desta Arifta",
            'department_id' => 10,
            'email' => "desta@astronacci.net",
            'phone_number' => '089662690020',
            'password' => Hash::make('password'),
        ]);
    }
}
