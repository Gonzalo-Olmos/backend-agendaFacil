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
        Schema::create('alquiler_juego', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('juego_id');
            $table->unsignedBigInteger('alquiler_id');

            // Restricción única para evitar que un juego se asigne más de una vez a un mismo alquiler
            $table->unique(['juego_id', 'alquiler_id']);
            
            $table->foreign('juego_id')->references('id')->on('juegos');
            $table->foreign('alquiler_id')->references('id')->on('alquileres')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquiler_juego');
    }
};
