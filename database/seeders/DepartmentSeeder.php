<?php

namespace Database\Seeders;

use App\Models\Office\Department as OfficeDepartment;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1
        OfficeDepartment::create([
            'name' => 'BOD',
            'status' => 'active'
        ]);
        // 2
        OfficeDepartment::create([
            'name' => 'GM',
            'status' => 'active'
        ]);
        // 3
        OfficeDepartment::create([
            'name' => 'IT Support',
            'status' => 'active'
        ]);
        // 4
        OfficeDepartment::create([
            'name' => 'Operation',
            'status' => 'active'
        ]);
        // 5
        OfficeDepartment::create([
            'name' => 'Sekuritas',
            'status' => 'active'
        ]);
        // 6
        OfficeDepartment::create([
            'name' => 'ACLUB',
            'status' => 'active'
        ]);
        // 7
        OfficeDepartment::create([
            'name' => 'ORBI',
            'status' => 'active'
        ]);
        // 8
        OfficeDepartment::create([
            'name' => 'Research',
            'status' => 'active'
        ]);
        // 9
        OfficeDepartment::create([
            'name' => 'CAT',
            'status' => 'active'
        ]);
        // 10
        OfficeDepartment::create([
            'name' => 'IT',
            'status' => 'active'
        ]);
        // 11
        OfficeDepartment::create([
            'name' => 'Creative',
            'status' => 'active'
        ]);
        // 12
        OfficeDepartment::create([
            'name' => 'IT Developer',
            'status' => 'active'
        ]);
    }
}
