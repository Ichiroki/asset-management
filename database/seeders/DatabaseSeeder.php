<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5);

        $this->call([
            DepartmentSeeder::class,
            // VehicleSeeder::class,
            // LaptopSeeder::class,
            PositionSeeder::class,
            RolesAndPermissionSeeder::class,
            UserSeeder::class,
            RolesToUserSeeder::class,
        ]);
    }
}
