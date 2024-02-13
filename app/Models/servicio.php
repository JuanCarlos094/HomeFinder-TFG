<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    use HasFactory;
   
    protected $table = "servicios";
    protected $fillable = ["nombre_servicio","tipo_Servicio","inicio_presatcion","fin_prestacion","descuento","fecha_inicio_descuento","fecha_fin_descuento"];
    public $timestamps = false;
}
