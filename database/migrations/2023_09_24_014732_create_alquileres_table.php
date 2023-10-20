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
        Schema::create('alquileres', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('cliente_id');

            $table->foreign('cliente_id')->references('id')->on('clientes');

            $table->unsignedBigInteger('pago_id')->unique();

            $table->foreign('pago_id')->references('id')->on('pagos');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquileres');
    }
};
