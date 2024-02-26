<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";
    protected $fillable = ["NIF","razon_social","nombre_comercial","url","SIMEL"];
    public $timestamps = false;
 
    public function cups(){
        return $this->hasMany(cups::class);
    }

   
}
