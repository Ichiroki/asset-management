<?php

namespace Database\Seeders;

use App\Models\Asset\Vehicle;
use App\Models\Office\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bod = Department::where('name' , "BOD")->first();

        Vehicle::create([
            'type' => "Chevrolet",
            'number_plates' => 'B 16 JET',
            'capacity' => 4,
            'status' => "Active",
            'pic_id' => $bod->id,
            'pic_type' => Department::class,
        ]);
        Vehicle::create([
            'type' => "Luxio",
            'number_plates' => 'B 2956 TIQ',
            'capacity' => 8,
            'status' => "Active",
            'pic_id' => $bod->id,
            'pic_type' => Department::class,
        ]);
        Vehicle::create([
            'type' => "BMW",
            'number_plates' => 'B 63 AWY',
            'capacity' => 4,
            'status' => "Occupied",
            'pic_id' => $bod->id,
            'pic_type' => Department::class,
        ]);
        Vehicle::create([
            'type' => "Fortuner",
            'number_plates' => 'B 1106 P',
            'capacity' => 4,
            'status' => "Occupied",
            'pic_id' => $bod->id,
            'pic_type' => Department::class,
        ]);
        Vehicle::create([
            'type' => "Mercedes Benz",
            'number_plates' => 'B 2554 BBL',
            'capacity' => 4,
            'status' => "Active",
            'pic_id' => $bod->id,
            'pic_type' => Department::class,
        ]);
    }
}
