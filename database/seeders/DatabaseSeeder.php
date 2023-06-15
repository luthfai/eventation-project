<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(UndanganSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(GuestSeeder::class);
        // $this->call([
        //     UsersTableSeeder::class,
        //     // PostsTableSeeder::class,
        //     // CommentsTableSeeder::class,
        // ]);

    }
}
