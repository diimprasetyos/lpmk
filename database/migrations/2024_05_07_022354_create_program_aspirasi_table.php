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
        Schema::create('program_aspirasi', function (Blueprint $table) {
            $table->id();
            $table->enum('prioritas', ['P1', 'P2', 'P3']);
            $table->integer('rt');
            $table->integer('rw');
            $table->text('deskripsi');
            $table->string('file');
            $table->string('perantara');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_aspirasi');
    }
};
