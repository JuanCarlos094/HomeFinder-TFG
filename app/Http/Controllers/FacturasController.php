<?php

namespace App\Http\Controllers;

use App\Models\Factura; 
use App\Http\Requests\StoreFacturaRequest; // Importa las solicitudes necesarias
use App\Http\Requests\UpdateFacturaRequest;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facturas = Factura::all();
        return view('admin.facturas.index', compact('facturas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.facturas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFacturaRequest $request)
    {
        Factura::create($request->validated());
        return redirect()->route('admin.facturas.index')->with('success', 'Factura creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Factura $factura)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Factura $factura)
    {
        return view('admin.facturas.edit', compact('factura'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFacturaRequest $request, Factura $factura)
    {
        $factura->update($request->validated());
        return redirect()->route('admin.facturas.index')->with('success', 'Factura editada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Factura $factura)
    {
        $factura->delete();
        return back()->with('success', 'Factura eliminada con éxito');
    }
}
