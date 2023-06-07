<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name1');
            $table->string('nickname1');
            $table->string('name2');
            $table->string('nickname2');
            $table->string('slug'); // this is the URL-friendly version of the title
            $table->string('description');
            $table->string('location');
            $table->timestamp('event_date');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->string('event_image');
            $table->string('event_image_alt');
            $table->string('event_image_title');
            $table->string('event_image_caption');
            $table->string('event_video');
            $table->string('event_video_alt');
            $table->string('event_video_title');
            $table->string('event_video_caption');
            $table->string('event_audio');
            $table->string('event_audio_alt');
            $table->string('event_audio_title');
            $table->string('event_audio_caption');
            $table->string('location_url');
            // user_id is the foreign key that references the id field on the users table
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
