<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'users', 'guard_name' => 'web',]);
        Permission::create([ 'name' => 'roles', 'guard_name' => 'web']);
        Permission::create([ 'name' => 'permissions', 'guard_name' => 'web']);
        Permission::create([ 'name' => 'debug', 'guard_name' => 'web']);
    }
}
