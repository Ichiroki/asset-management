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
        OfficeDepartment::create([
            'name' => 'BOD',
            'status' => 'active'
        ]);
        OfficeDepartment::create([
            'name' => 'GM',
            'status' => 'active'
        ]);
        OfficeDepartment::create([
            'name' => 'IT Support',
            'status' => 'active'
        ]);
        OfficeDepartment::create([
            'name' => 'Operation',
            'status' => 'active'
        ]);
        OfficeDepartment::create([
            'name' => 'Sekuritas',
            'status' => 'active'
        ]);
    }
}
