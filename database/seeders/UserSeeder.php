<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'id'                => 1,
                'name'              => 'Administrator',
                'email'             => env('APP_ADMIN_EMAIL', 'admin@admin.com'),
                'password'          => env('APP_ADMIN_PASSWORD', 'admin'),
                'email_verified_at' => now(),
                'remember_token'    => Str::random(10),
                'active'            => true,
            ]
        )->assignRole(1);

        User::create([
            'id'          		=> 2,
            'name'      		=> 'User',
            'email'     		=> 'user@user.com',
            'password'  		=> 'user',
            'email_verified_at' => now(),
            'remember_token' 	=> Str::random(10),
            'active' => true,
        ]);
    }
}
