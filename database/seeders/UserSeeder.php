<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['uuid' => Str::uuid(), 'mobile' => '09123362766', 'mobile_verified_at' => Carbon::now(), 'password' => bcrypt('password')]);
        User::create(['uuid' => Str::uuid(), 'mobile' => '09125386384', 'mobile_verified_at' => Carbon::now(), 'password' => bcrypt('password')]);
        User::create(['uuid' => Str::uuid(), 'mobile' => '09123724852', 'mobile_verified_at' => Carbon::now(), 'password' => bcrypt('password')]);
        User::create(['uuid' => Str::uuid(), 'mobile' => '09378829873', 'mobile_verified_at' => Carbon::now(), 'password' => bcrypt('password')]);
    }
}
