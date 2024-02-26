<?php

namespace App\Http\Controllers;

use App\Models\servicio;
use App\Http\Requests\StoreservicioRequest;
use App\Http\Requests\UpdateservicioRequest;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $servicios= servicio::all();
        return view('admin.servicios.index', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.servicios.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreservicioRequest $request)
    {
        //
        servicio::create($request->validated());
        return redirect()->route('admin.servicios.index')->with('success', 'servicio creado con exito');

    }

    /**
     * Display the specified resource.
     */
    public function show(servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(servicio $servicio)
    {
        //
        return view('admin.servicios.edit', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateservicioRequest $request, servicio $servicio)
    {
        //
        $servicio->update($request->validated());
        return redirect()->route('admin.servicios.index')->with('success', 'servicio editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(servicio $servicio)
    {
        //
         $servicio->delete();
        return back();
    }
}
