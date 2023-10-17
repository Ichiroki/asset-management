<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            'name' => 'BOD',
            'status' => 'active'
        ]);
        Department::create([
            'name' => 'GM',
            'status' => 'active'
        ]);
        Department::create([
            'name' => 'IT Support',
            'status' => 'active'
        ]);
        Department::create([
            'name' => 'Operation',
            'status' => 'active'
        ]);
        Department::create([
            'name' => 'Sekuritas',
            'status' => 'active'
        ]);
    }
}
