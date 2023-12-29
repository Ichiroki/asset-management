<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permission
        // Approval Vehicle
        Permission::create(['name' => 'access vehicle loans']);
        Permission::create(['name' => 'view vehicle loans']);
        Permission::create(['name' => 'edit vehicle loans']);
        Permission::create(['name' => 'approve vehicle loans']);
        Permission::create(['name' => 'delete vehicle loans']);

        // Approval Laptop
        Permission::create(['name' => 'access laptop loans']);
        Permission::create(['name' => 'view laptop loans']);
        Permission::create(['name' => 'edit laptop loans']);
        Permission::create(['name' => 'approve laptop loans']);
        Permission::create(['name' => 'delete laptop loans']);

        // create roles and assign

        $bod = Role::create(['name' => 'approval_bod']);
        $bod->givePermissionTo(['access vehicle loans', 'view vehicle loans', 'edit vehicle loans', 'delete vehicle loans', 'approve vehicle loans']);

        $it = Role::create(['name' => 'approval_it']);
        $it->givePermissionTo(['access laptop loans', 'view laptop loans', 'edit laptop loans', 'delete laptop loans', 'approve laptop loans']);

        $superAdmin = Role::create(['name' => 'super_admin']);
        $superAdmin->givePermissionTo(Permission::all());

    }
}
