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
        // $table->id();
        //     $table->string('name');
        //     $table->string('email')->unique()->nullable();
        //     $table->string('phone')->unique()->nullable();
        //     // attendance status (hadir, tidak hadir, belum dikonfirmasi)
        //     $table->string('status')->default('belum dikonfirmasi');
        //     // fk event id
        //     $table->foreignId('event_id')->constrained('events');
        //     $table->timestamps();
        DB::table('guest')->insert([
            'name' => 'Dummy guest',
            'email' => 'dummyguest@gmail.com',
            'phone' => '081234567890',
            'status' => 'belum dikonfirmasi',
            'event_id' => 1,
        ]);
    }
}
