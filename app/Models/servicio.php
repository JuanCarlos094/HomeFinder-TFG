<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    use HasFactory;
   
    protected $table = "servicios";
    protected $fillable = ["nombre_servicio","tipo_servicio"];
    public $timestamps = false;

    public function cups_servicios()
    {
        return $this->hasMany(cups_servicio::class);
    }

}
