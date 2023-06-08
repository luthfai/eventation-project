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
            'name' => 'undangan1',
            'description' => 'undangan1',
            'price' => 100000,
            'image' => "https://cdn0.hitched.co.uk/article/1084/3_2/960/jpg/64801-wedding-evites-etsy.jpeg",
            'image_alt' => 'undangan1',
            'paket' => 'Basic',
            'kategori' => 'Wedding'
        ]);
        DB::table('undangans')->insert([
            'name' => 'undangan2',
            'description' => 'undangan2',
            'price' => 100000,
            'image' => "https://cdn0.hitched.co.uk/article/1084/3_2/960/jpg/64801-wedding-evites-etsy.jpeg",
            'image_alt' => 'undangan2',
            'paket' => 'Basic',
            'kategori' => 'Wedding'
        ]);
        DB::table('undangans')->insert([
            'name' => 'undangan3',
            'description' => 'undangan3',
            'price' => 100000,
            'image' => "https://cdn0.hitched.co.uk/article/1084/3_2/960/jpg/64801-wedding-evites-etsy.jpeg",
            'image_alt' => 'undangan3',
            'paket' => 'Basic',
            'kategori' => 'Wedding'
        ]);
    }
}
