<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unidad_precio_mes extends Model
{
    use HasFactory;
    protected $table = "unidad_precio_mes";
    protected $fillable = ["unidad","precio","mes"];

    public $timestamps = false;

    public function cups_servicio(){
        return $this->HasMany(cups_servicio::class); 
    }
}
