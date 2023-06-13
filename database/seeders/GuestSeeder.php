<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('guest')->insert([
            'name' => 'Dummy guest',
            'email' => 'dummyguest@gmail.com',
            'phone' => '081234567890',
            'status' => 'belum dikonfirmasi',
            'event_id' => 1,
        ]);
    }
}
