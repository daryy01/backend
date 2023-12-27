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
        Schema::table('artists_exhibition', function (Blueprint $table) {
            // Check if the column exists before adding it
            if (!Schema::hasColumn('artists_exhibition', 'artist_id')) {
                $table->unsignedBigInteger('artist_id')->nullable();
                $table->foreign('artist_id')->references('artist_id')->on('artists');
            }
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
