<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(Faker $faker): void
    {
        User::create([
            'name' => "Fahrezi Rizqiawan",
            'department_id' => 12,
            'email' => "fahrezirizqiawan12649@gmail.com",
            'position' => "User",
            'phone_number' => '089662690020',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => "Bima Iskandar",
            'department_id' => 1,
            'email' => "emailzfake23148708923475@gmail.com",
            'position' => "User",
            'phone_number' => $faker->phoneNumber(),
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => "Chizuru Yuuko",
            'department_id' => 2,
            'email' => "chizuru@gmail.com",
            'position' => "User",
            'phone_number' => $faker->phoneNumber(),
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => "Tirta Burhanuddin",
            'department_id' => 3,
            'email' => "tirta@gmail.com",
            'position' => "Head",
            'phone_number' => $faker->phoneNumber(),
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => "Widya Hadi",
            'department_id' => 6,
            'email' => "widya@gmail.com",
            'position' => "User",
            'phone_number' => $faker->phoneNumber(),
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => "Citra Hadijah",
            'department_id' => 4,
            'email' => "citra@gmail.com",
            'position' => "User",
            'phone_number' => $faker->phoneNumber(),
            'password' => Hash::make('password'),
        ]);
    }
}
