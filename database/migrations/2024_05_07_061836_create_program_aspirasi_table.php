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
            $table->string('perantara');
            $table->enum('status', ['accepted', 'rejected', 'pending']);
            $table->unsignedBigInteger('detail_program_aspirasi_id');
            $table->foreign('detail_program_aspirasi_id')->references('id')->on('detail_program_aspirasi');
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
