<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";
    protected $fillable = ["NIF","razon_social","nombre_comercial","numero_cups","url","SIMEL"];
    public $timestamps = false;
    public function servicios()
    {
        return $this->belongsToMany(servicio::class);
    }
}
