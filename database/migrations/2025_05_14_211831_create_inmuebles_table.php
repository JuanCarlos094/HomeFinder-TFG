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
        Schema::create('inmuebles', function (Blueprint $table) {
        $table->id();
        $table->string('titulo')->nullable();
        $table->string('precio')->nullable();
        $table->string('link')->nullable();
        $table->string('metros')->nullable();
        $table->string('habitaciones')->nullable();
        $table->string('banos')->nullable();
        $table->string('operacion')->nullable(); // compra o alquiler
        $table->string('vivienda')->nullable();  // casa, piso, ático, etc.
        $table->string('estado')->nullable();    // obra nueva, segunda mano, reformar
        $table->string('ciudad')->nullable();    // localidad
        $table->string('portal'); // Fotocasa o Solvia
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inmuebles');
    }
};
