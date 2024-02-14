<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\usuario;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      $role1= Role::create(["name"=>"CEO"]);
      $role2= Role::create(["name"=>"administracion"]);
      $ceo = usuario::find(1);
      $administrador = usuario::find(2);
      $ceo->assignRole($role1);
      $administrador->assignRole($role2);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
    }
};
