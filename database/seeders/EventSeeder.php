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
        // Schema::create('events', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title');
        //     $table->string('name1');
        //     $table->string('nickname1');
        //     $table->string('name2');
        //     $table->string('nickname2');
        //     $table->string('slug'); // this is the URL-friendly version of the title
        //     $table->string('description');
        //     $table->string('location');
        //     $table->timestamp('event_date');
        //     $table->timestamp('start_date');
        //     $table->timestamp('end_date');
        //     $table->string('event_image');
        //     $table->string('event_image_alt');
        //     $table->string('event_image_title');
        //     $table->string('event_image_caption');
        //     $table->string('event_video');
        //     $table->string('event_video_alt');
        //     $table->string('event_video_title');
        //     $table->string('event_video_caption');
        //     $table->string('event_audio');
        //     $table->string('event_audio_alt');
        //     $table->string('event_audio_title');
        //     $table->string('event_audio_caption');
        //     $table->string('location_url');
        //     // user_id is the foreign key that references the id field on the users table
        //     $table->foreignId('user_id')->constrained('users');
        //     $table->timestamps();
        // });

        DB::table('events')->insert([
            'title' => 'Wedding Invitation',
            'name1' => 'Rizky Billiard',
            'nickname1' => 'Rizky',
            'name2' => 'Leslie wong',
            'nickname2' => 'Leslie',
            'slug' => 'wedding-invitation',
            'description' => 'Wedding Invitation',
            'location' => 'Jakarta',
            'event_date' => '2021-06-05 20:49:27',
            'event_image' => 'wedding-invitation.jpg',
            'event_image_alt' => 'wedding-invitation',
            'event_image_title' => 'wedding-invitation',
            'event_image_caption' => 'wedding-invitation',
            'event_video' => 'wedding-invitation.mp4',
            'event_video_alt' => 'wedding-invitation',
            'event_video_title' => 'wedding-invitation',
            'event_video_caption' => 'wedding-invitation',
            'event_audio' => 'wedding-invitation.mp3',
            'event_audio_alt' => 'wedding-invitation',
            'event_audio_title' => 'wedding-invitation',
            'event_audio_caption' => 'wedding-invitation',
            'location_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.085742821737!2d106.8227453147699!3d-6.186711995519999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fcf0b3b0b6d1%3A0x2b0b0d0b0b0b0b0b!2sJl.%20Kemang%20Sel.%20No.125%2C%20RT.1%2FRW.1%2C%20Bangka%2C%20Kec.%20Mampang%20Prpt.%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012710!5e0!3m2!1sen!2sid!4v1622903388989!5m2!1sen!2sid',
            'user_id' => 4,
            'undangan_id' => 1,
        ]);
    }
}
