<?php

namespace Database\Seeders;

use App\Models\Office\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1
        Department::create([
            'name' => 'BOD',
            'status' => 'active'
        ]);
        // 2
        Department::create([
            'name' => 'GM',
            'status' => 'active'
        ]);
        // 3
        Department::create([
            'name' => 'IT Support',
            'status' => 'active'
        ]);
        // 4
        Department::create([
            'name' => 'Operation',
            'status' => 'active'
        ]);
        // 5
        Department::create([
            'name' => 'Sekuritas',
            'status' => 'active'
        ]);
        // 6
        Department::create([
            'name' => 'ACLUB',
            'status' => 'active'
        ]);
        // 7
        Department::create([
            'name' => 'ORBI',
            'status' => 'active'
        ]);
        // 8
        Department::create([
            'name' => 'Research',
            'status' => 'active'
        ]);
        // 9
        Department::create([
            'name' => 'CAT',
            'status' => 'active'
        ]);
        // 10
        Department::create([
            'name' => 'IT',
            'status' => 'active'
        ]);
        // 11
        Department::create([
            'name' => 'Creative',
            'status' => 'active'
        ]);
        // 12
        Department::create([
            'name' => 'IT Developer',
            'status' => 'active'
        ]);
    }
}
