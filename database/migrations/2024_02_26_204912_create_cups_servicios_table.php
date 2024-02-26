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
       
        Schema::create('cups_servicio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cups_id');
            $table->unsignedBigInteger('servicio_id');
            $table->unsignedBigInteger('unidad_id');
            $table->double('consumo');
            $table->date('inicio_prestacion');
            $table->date('fin_prestacion')->nullable();
            $table->integer('descuento');
            $table->date('fecha_inicio_descuento');
            $table->date('fecha_fin_descuento')->nullable();

            $table->foreign('cups_id')->references('id')->on('cups')->onDelete('cascade');
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');
            $table->foreign('unidad_id')->references('id')->on('unidad_precio_mes')->onDelete('cascade');
        }); 
            }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('cups_servicio');
    }
};