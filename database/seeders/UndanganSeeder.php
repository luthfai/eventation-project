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
        DB::table('undangans')->insert([
            'name' => 'Modern Minimalisiqie',
            'description' => 'Modern Minimalisique adalah undangan yang dibuat dengan desain minimalis dan modern, cocok untuk kamu yang ingin mengadakan acara pernikahan dengan tema minimalis dan modern, dengan harga yang terjangkau.',
            'price' => 100000,
            'image' => 'thumb-u1-1.png',
            'image2' => 'thumb-u1-2.png',
            'image3' => 'thumb-u1-3.png',
            'image4' => 'thumb-u1-4.png',
            'paket' => 'Basic',
            'kategori' => 'Wedding'
        ]);
        // DB::table('undangans')->insert([
        //     'name' => 'undangan2',
        //     'description' => 'undangan2',
        //     'price' => 100000,
        //     'image' => "https://cdn0.hitched.co.uk/article/1084/3_2/960/jpg/64801-wedding-evites-etsy.jpeg",
        //     'image_alt' => 'undangan2',
        //     'paket' => 'Basic',
        //     'kategori' => 'Wedding'
        // ]);
        // DB::table('undangans')->insert([
        //     'name' => 'undangan3',
        //     'description' => 'undangan3',
        //     'price' => 100000,
        //     'image' => "https://cdn0.hitched.co.uk/article/1084/3_2/960/jpg/64801-wedding-evites-etsy.jpeg",
        //     'image_alt' => 'undangan3',
        //     'paket' => 'Basic',
        //     'kategori' => 'Wedding'
        // ]);
    }
}
