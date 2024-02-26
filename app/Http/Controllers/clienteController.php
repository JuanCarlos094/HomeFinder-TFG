<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Http\Requests\StoreclienteRequest;
use App\Http\Requests\UpdateclienteRequest;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */ /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes =  cliente::all();

        return view('admin.clientes.index', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        return view('admin.clientes.create');
    }

    public function store(StoreclienteRequest $request)
    {
        //
        cliente::create($request->validated());

        return redirect()->route('admin.clientes.index')->with('success','El cliente se ha registrado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

     public function edit(cliente $cliente)
     {
         //
         return view('admin.clientes.edit', compact('cliente'));
     }
 

    public function update(UpdateclienteRequest $request, cliente $cliente)
    {
        $cliente->update($request->validated());
        
    return redirect()->route('admin.clientes.index')->with('success',"Cliente actualizado con exito!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
        //
        $cliente->delete();
        
        return back();
    }
}