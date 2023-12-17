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
        Schema::create('artists_exhibition', function (Blueprint $table) {
            $table->id('exhibition_id');
            $table->unsignedBigInteger('artist_id'); // Add this line to create the artist_id column
            $table->foreign('artist_id')->references('artist_id')->on('artists');
            $table->string('exhibition_name');
            $table->date('exhibition_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists_exhibition');
    }
};
