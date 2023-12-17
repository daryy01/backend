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
        Schema::create('event_attendance', function (Blueprint $table) {
            $table->id('attendance_id');
            $table->unsignedBigInteger('event_id'); // Add this line to create the artist_id column
            $table->foreign('event_id')->references('event_id')->on('events');
            $table->unsignedBigInteger('artist_id'); // Add this line to create the class_id column
            $table->foreign('artist_id')->references('artist_id')->on('artists');
            $table->date('attendance_date');
            $table->timestamps();
        }); 
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_attendance');
    }
};
