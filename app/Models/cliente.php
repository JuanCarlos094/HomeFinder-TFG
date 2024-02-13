<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";
    protected $fillable = ["NIf","razon_social","nombre_comercial","licencia","numero_cups","cups_ultima_facturacion","canal_CRM","codigo_SIMEI","url"];
    public $timestamps = false;
    
}
