<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inmueble;

class InmuebleController extends Controller
{
    public function index(Request $request)
{
    $query = Inmueble::query();

    if ($request->filled('operacion')) {
        if ($request->operacion === 'alquiler') {
        $query->where('titulo', 'like', '%alquiler%');
    } elseif ($request->operacion === 'compra') {
        $query->where('titulo', 'not like', '%alquiler%');
    }
    }

    if ($request->filled('vivienda')) {
        $query->where('vivienda', $request->vivienda);
    }

    if ($request->filled('estado')) {
        $query->where('estado', $request->estado);
    }

    if ($request->filled('precio_min')) {
        $query->whereRaw('CAST(precio AS UNSIGNED) >= ?', [$request->precio_min]);
    }

    if ($request->filled('precio_max')) {
        $query->whereRaw('CAST(precio AS UNSIGNED) <= ?', [$request->precio_max]);
    }

    if ($request->filled('habitaciones')) {
        $query->whereRaw('CAST(habitaciones AS UNSIGNED) >= ?', [$request->habitaciones]);
    }

    if ($request->filled('ciudad')) {
        $query->where('ciudad', 'like', '%' . $request->ciudad . '%');
    }

    // Mostrar resultados en orden aleatorio
    $inmuebles = $query->inRandomOrder()->get();

    return view('inmuebles', compact('inmuebles'));
}

}
