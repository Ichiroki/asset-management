<?php

namespace Database\Seeders;

use App\Models\Office\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::create([
            'name' => 'Leader',
            'status' => 'active',
        ]);

        Position::create([
            'name' => 'Head',
            'status' => 'active',
        ]);
    }
}
