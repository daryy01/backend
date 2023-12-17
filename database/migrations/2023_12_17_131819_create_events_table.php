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
            $table->id('event_id');
            $table->string('event_name');
            $table->string('event_type');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('location');
            $table->unsignedBigInteger('organizer_id'); // Add this line to create the artist_id column
            $table->foreign('organizer_id')->references('organizer_id')->on('organizers');
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
