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
        Schema::table('events', function (Blueprint $table) {
            // Check if the column already exists before adding it
            if (!Schema::hasColumn('events', 'organizer_id')) {
                $table->unsignedBigInteger('organizer_id');
                $table->foreign('organizer_id')->references('organizer_id')->on('organizers');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // If needed, you can roll back the changes here
    }
};
