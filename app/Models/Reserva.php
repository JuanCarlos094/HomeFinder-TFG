<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';

    protected $fillable = [
        'usuario_id',
        'inmueble_id',
        'fecha',
        'hora',
    ];

    public function usuario()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'usuario_id');
    }

    public function inmueble()
    {
        return $this->belongsTo(\App\Models\Inmueble::class, 'inmueble_id');
    }
}
