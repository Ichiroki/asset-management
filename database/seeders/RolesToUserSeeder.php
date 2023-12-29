<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class RolesToUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assign to users
        $gema = User::where('email', 'oman@gmail.com')->first();
        $gema->assignRole('approval_bod');

        $ezi = User::where('email', 'fahrezirizqiawan12649@gmail.com')->first();
        $ezi->assignRole('approval_it');
        $ezi->assignRole('super_admin');
    }
}
