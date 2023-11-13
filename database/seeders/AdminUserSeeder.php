<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = [
            [
                'id'                => 1,
                'name'              => 'Client User',
                'email'             => 'client@MyReservations.com',
                'email_verified_at' => Carbon::now(),
                'password'          => bcrypt('client7357'),
                'remember_token'    => Str::random(10),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'id'                => 2,
                'name'              => 'Staff User',
                'email'             => 'staff@MyReservations.com',
                'email_verified_at' => Carbon::now(),
                'password'          => bcrypt('staff8159'),
                'remember_token'    => Str::random(10),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'id'                => 3,
                'name'              => 'Admin User',
                'email'             => 'admin@MyReservations.com',
                'email_verified_at' => Carbon::now(),
                'password'          => bcrypt('admin9123'),
                'remember_token'    => Str::random(10),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'id'                => 4,
                'name'              => 'Richard A. Hoyle',
                'email'             => 'rhoyle@MyReservations.com',
                'email_verified_at' => Carbon::now(),
                'password'          => bcrypt('64Rah56B'),
                'remember_token'    => Str::random(10),
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],

        ];

        User::insert($users);


    }
}
