<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesToUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assign to users
        $gema = User::where('email', 'gema@astronacci.net')->first();
        $gema->assignRole('approval_bod');

        $ezi = User::where('email', 'fahrezi@astronacci.net')->first();
        $ezi->assignRole('super_admin');
    }
}
