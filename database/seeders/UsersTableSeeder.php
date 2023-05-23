<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'Muhammad Dzaky',
                'email' => 'admin@mail.com',
                'password' => Hash::make('admin'),
                'roles' => 'admin',
                'status' => 'active',
                'first_attemp' => false,
                'image' => 'default.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'name' => 'User Ganteng',
                'email' => 'user@mail.com',
                'password' => Hash::make('user'),
                'roles' => 'user',
                'status' => 'active',
                'first_attemp' => false,
                'image' => 'default.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'name' => 'John Doe',
                'email' => 'trial@mail.com',
                'password' => Hash::make('trial'),
                'roles' => 'user',
                'status' => 'pending',
                'first_attemp' => true,
                'image' => 'default.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
