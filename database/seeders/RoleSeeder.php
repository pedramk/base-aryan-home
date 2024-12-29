<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'super']);
        Role::create(['name' => 'accountant']);
        Role::create(['name' => 'store-manager']);
        Role::create(['name' => 'salesman']);
        Role::create(['name' => 'warehouse-keeper']);
        Role::create(['name' => 'warehouse-worker']);
    }
}
