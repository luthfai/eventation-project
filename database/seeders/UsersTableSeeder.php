<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'User',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        DB::table('users')->insert([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'superadmin',
        ]);

        DB::table('users')->insert([
            'name' => 'Dummy User',
            'username' => 'user2',
            'email' => 'dummy@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
    }
}
