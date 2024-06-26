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
        Schema::create('detail_program_aspirasi', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('prioritas');
            $table->integer('rt');
            $table->integer('rw');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_program_aspirasi');
    }
};
