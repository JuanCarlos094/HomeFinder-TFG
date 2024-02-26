<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /*
     
Run the migrations.*/
    public function up(): void
    {
        Schema::create('unidad_precio_mes', function (Blueprint $table) {
            $table->id();
            $table->string('unidad');
            $table->double('precio');
            $table->string('mes');
        });
    }

    /*Reverse the migrations.*/
    public function down(): void
    {
        Schema::dropIfExists('unidad_precio_mes');
    }
};