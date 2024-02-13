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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string("NIF")->unique();
            $table->string('razon_social');
            $table->string('nombre_comercial');
            $table->string('licencia');
            $table->string('numero_cups')->unique();
            $table->string('cups_ultima_facturacion');
            $table->string('canal_CRM');
            $table->string('codigo_SIMEI');
            $table->string('url');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
