<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cups extends Model
{
    use HasFactory;

    
    protected $table = "cups";
    protected $fillable = ["cliente_id","cod_cups","direccion"];
    public $timestamps = false;

    public function cliente(){
        return $this->belongsTo(cliente::class,'cliente_id','id');
    }
    public function cups(){
        return $this->hasMany(cups_servicio::class);
    }


}
