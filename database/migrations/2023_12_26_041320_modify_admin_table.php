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
        Schema::table('admin', function (Blueprint $table) {
            // Check if the column already exists before adding it
            if (!Schema::hasColumn('admin', 'id')) {
                $table->unsignedBigInteger('id');
                $table->foreign('id')->references('id')->on('users');
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
