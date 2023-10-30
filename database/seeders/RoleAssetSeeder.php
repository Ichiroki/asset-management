<?php

namespace Database\Seeders;

use App\Models\Office\RoleAsset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleAssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoleAsset::create([
            'name' => 'Approval BOD',
            'status' => 'active'
        ]);
        RoleAsset::create([
            'name' => 'Approval GM',
            'status' => 'active'
        ]);
        RoleAsset::create([
            'name' => 'Approval IT',
            'status' => 'active'
        ]);
        RoleAsset::create([
            'name' => 'Approval Operation',
            'status' => 'active'
        ]);
        RoleAsset::create([
            'name' => 'User',
            'status' => 'active'
        ]);
    }
}
