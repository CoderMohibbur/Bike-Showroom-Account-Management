<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // রোল তৈরি করা
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Editor']);

        // পারমিশন তৈরি করা
        Permission::create(['name' => 'view post']);
        Permission::create(['name' => 'edit post']);
        Permission::create(['name' => 'delete post']);
    }
}
