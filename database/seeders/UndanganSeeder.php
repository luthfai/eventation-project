<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UndanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seed undangan
        // Schema::create('undangan', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('description');
        //     $table->integer('price');
        //     $table->string('image');
        //     $table->string('image_alt');
        //     $table->string('paket');
        //     $table->string('kategori');
        //     // token
        //     $table->string('token');
        //     // fk event id and guest id
        //     $table->foreignId('event_id')->constrained('events');
        //     $table->foreignId('guest_id')->constrained('guest');
        //     $table->timestamps();
        // });
        DB::table('undangan')->insert([
            'name' => 'Undangan Pernikahan',
            'description' => 'Undangan pernikahan dengan desain yang elegan',
            'price' => 100000,
            'image' => 'undangan-pernikahan1.jpg',
            'image_alt' => 'undangan pernikahan',
            'paket' => 'Basic',
            'kategori' => 'Pernikahan',
            'token' => '1234567890',
            'event_id' => 1,
            'guest_id' => 1,
        ]);
    }
}
