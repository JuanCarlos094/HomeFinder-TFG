<?php

namespace App\Http\Controllers;

use App\Models\cups;
use App\Models\cliente;
use App\Http\Requests\StorecupsRequest;
use App\Http\Requests\UpdatecupsRequest;

class CupsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cups = cups::all();
        return view('admin.cups.index', compact('cups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = cliente::all();
        return view('admin.cups.create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecupsRequest $request)
    {
        cups::create($request->validated());
        return redirect()->route('admin.cups.index')->with('success', 'cup creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(cups $cups)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cups $cups)
    {
        $clientes = cliente::all();
        return view('admin.cups.index', compact('cups'), compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecupsRequest $request, cups $cups)
    {
        $cups->update($request->validated());
        return redirect()->route('admin.cups.index')->with('success', 'cup editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cups $cups)
    {
        $cups->delete();
        return back();
    }
}
