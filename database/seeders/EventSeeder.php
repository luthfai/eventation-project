<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //     $table->id();
        //     $table->string('title');
        //     $table->string('name1');
        //     $table->string('nickname1');
        //     $table->string('name2');
        //     $table->string('nickname2');
        //     $table->string('slug')->unique();
        //     $table->string('description');
        //     $table->string('location');
        //     $table->timestamp('event_date');
        //     $table->timestamp('start_date');
        //     $table->timestamp('end_date');
        //     $table->string('image1')->nullable();
        //     $table->string('image2')->nullable();
        //     $table->string('image3')->nullable();
        //     $table->string('image4')->nullable();
        //     $table->string('video_url')->nullable();
        //     $table->string('event_audio')->nullable();
        //     $table->longText('location_url')->nullable();
        //     // user_id is the foreign key that references the id field on the users table
        //     $table->foreignId('user_id')->constrained('users');
        //     $table->foreignId('undangan_id')->constrained('undangans');
        //     $table->timestamps();

        DB::table('events')->insert([
            'title' => 'Wedding Invitation',
            'name1' => 'Rizky Billiard',
            'nickname1' => 'Rizky',
            'name2' => 'Leslie wong',
            'nickname2' => 'Leslie',
            'slug' => 'RiskyLeslie',
            'description' => 'Wedding Invitation',
            'location' => 'Jakarta',
            'event_date' => '2023-06-05 20:49:27',
            'start_date' => '2023-10-05 08:00:00',
            'end_date' => '2023-10-05 13:00:00',
            'image1' => '1.png',
            'image2' => '2.png',
            'video_url' => 'https://www.youtube.com/watch?v=1y6smkh6c-0',
            'event_audio' => 'https://www.youtube.com/watch?v=1y6smkh6c-0',
            'location_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.065508821737!2d106.8269843147699!3d-6.175392995527999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd61a0d9b1b1a9d%3A0x2b7b0d0b0b0b0b0b!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1622905209277!5m2!1sid!2sid',
            'user_id' => 4,
            'undangan_id' => 1,
        ]);
        DB::table('events')->insert([
            'title' => 'Wedding Invitation',
            'name1' => 'Rizky Billiard',
            'nickname1' => 'Rizky',
            'name2' => 'Leslie wong',
            'nickname2' => 'Leslie',
            'slug' => 'RiskyLeslie2',
            'description' => 'Wedding Invitation',
            'location' => 'Jakarta',
            'event_date' => '2023-06-05 20:49:27',
            'start_date' => '2023-10-05 08:00:00',
            'end_date' => '2023-10-05 13:00:00',
            'image1' => '1.png',
            'image2' => '2.png',
            'video_url' => 'https://www.youtube.com/watch?v=1y6smkh6c-0',
            'event_audio' => 'https://www.youtube.com/watch?v=1y6smkh6c-0',
            'location_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.065508821737!2d106.8269843147699!3d-6.175392995527999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd61a0d9b1b1a9d%3A0x2b7b0d0b0b0b0b0b!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1622905209277!5m2!1sid!2sid',
            'user_id' => 4,
            'undangan_id' => 2,
        ]);
    }
}
