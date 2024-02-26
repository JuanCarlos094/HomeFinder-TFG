<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cups_servicio extends Model
{
    use HasFactory;

    protected $table = "cups_servicio";
    protected $fillable = ["cups_id","servicio_id","unidad_id","consumo","inicio_prestacion","fin_prestacion","descuento","fecha_inicio_descuento","fecha_fin_descuento"];

    public $timestamps = false;

    public function cup(){
        return $this->belongsTo(cups::class,'cups_id','id');
    }
    public function servicio(){
        return $this->belongsTo(servicio::class,'servicio_id','id');
    }
    public function unidad(){
        return $this->belongsTo(unidad_precio_mes::class,'unidad_id','id');
    }

}