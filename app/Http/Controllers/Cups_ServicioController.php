<?php

namespace App\Http\Controllers;

use App\Models\cups_servicio;
use App\Models\cups;
use App\Models\cliente;
use App\Models\servicio;
use App\Models\unidad_precio_mes;
use App\Http\Requests\Storecups_servicioRequest;
use App\Http\Requests\Updatecups_servicioRequest;

class Cups_ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cups_servicios = cups_servicio::all();
        $cups = cups::all();
        $clientes = cliente::all();
        $servicios = servicio::all();
        $unidades = unidad_precio_mes::all();
        return view('admin.cups_servicios.index', compact('cups_servicios', 'cups','clientes', 'servicios', 'unidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cups = cups::all();
        $clientes = cliente::all();
        $servicios = servicio::all();
        $unidades = unidad_precio_mes::all();
        return view('admin.cups_servicios.create', compact('cups','clientes', 'servicios', 'unidades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storecups_servicioRequest $request)
    {
        cups_servicio::create($request->validated());
        return redirect()->route('admin.cups_servicios.index')->with('success', 'servicio registrado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(cups_servicio $cups_servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cups_servicio $cups_servicio)
    {
        $cups = cups::all();
        $clientes = cliente::all();
        $servicios = servicio::all();
        $unidades = unidad_precio_mes::all();
        return view('admin.cups_servicios.edit', compact('cups_servicio', 'cups','clientes', 'servicios', 'unidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatecups_servicioRequest $request, cups_servicio $cups_servicio)
    {
        $cups_servicio->update($request->validated());
        return redirect()->route('admin.cups_servicios.index')->with('success', 'servicio editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cups_servicio $cups_servicio)
    {
        $cups_servicio->delete();
        return back();
    }
}
