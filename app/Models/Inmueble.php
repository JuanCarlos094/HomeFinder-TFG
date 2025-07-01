<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    use HasFactory;

    protected $table = 'inmuebles';

    protected $fillable = [
        'titulo',
        'precio',
        'link',
        'metros',
        'habitaciones',
        'banos',
        'operacion',
        'vivienda',
        'estado',
        'ciudad',
        'portal',
    ];

    public function reservas()
{
    return $this->hasMany(\App\Models\Reserva::class, 'inmueble_id');
}
}
