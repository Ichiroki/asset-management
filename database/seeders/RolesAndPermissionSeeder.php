<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permission

        Permission::create(['name' => 'access vehicle loans']);
        Permission::create(['name' => 'view vehicle loans']);
        Permission::create(['name' => 'edit vehicle loans']);
        Permission::create(['name' => 'delete vehicle loans']);

        // create roles and assign

        $bod = Role::create(['name' => 'approval_bod']);
        $bod->givePermissionTo(['access vehicle loans', 'view vehicle loans', 'edit vehicle loans', 'delete vehicle loans']);

        $superAdmin = Role::create(['name' => 'super_admin']);
        $superAdmin->givePermissionTo(Permission::all());

    }
}
