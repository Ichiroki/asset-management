<?php

namespace Database\Seeders;

use App\Models\Asset\Vehicle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::create([
            'type' => "Chevrolet",
            'nomorPol' => 'B 16 JET',
            'capacity' => 4,
            'status' => "Active",
            'pic' => "BOD"
        ]);
        Vehicle::create([
            'type' => "Luxio",
            'nomorPol' => 'B 2956 TIQ',
            'capacity' => 8,
            'status' => "Active",
            'pic' => "BOD"
        ]);
        Vehicle::create([
            'type' => "BMW",
            'nomorPol' => 'B 63 AWY',
            'capacity' => 4,
            'status' => "On Loan",
            'pic' => "BOD"
        ]);
        Vehicle::create([
            'type' => "Fortuner",
            'nomorPol' => 'B 1106 P',
            'capacity' => 4,
            'status' => "On Loan",
            'pic' => "BOD"
        ]);
        Vehicle::create([
            'type' => "Mercedes Benz",
            'nomorPol' => 'B 2554 BBL',
            'capacity' => 4,
            'status' => "Active",
            'pic' => "BOD"
        ]);
    }
}
