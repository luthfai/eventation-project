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
        Schema::create('invits', function (Blueprint $table) {
            $table->id();
            // token
            $table->string('token');
            // fk event id and guest id
            $table->foreignId('event_id')->constrained('events');
            $table->foreignId('guest_id')->constrained('guest');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('undangan');
    }
};
