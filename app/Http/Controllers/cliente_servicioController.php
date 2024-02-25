<?php

namespace App\Http\Controllers;
use App\Models\cliente;
use App\Models\servicio;
use Illuminate\Http\Request;

class cliente_servicioController extends Controller
{
    public function obtenerServiciosDeCliente($clienteId)
    {
        $cliente = cliente::find($clienteId);
        $servicios = $cliente->servicios;

        // Realizar acciones con los servicios obtenidos

        return view('vista', compact('servicios'));
    }

    public function obtenerClientesDeServicio($servicioId)
    {
        $servicio = servicio::find($servicioId);
        $clientes = $servicio->clientes;

        // Realizar acciones con los clientes obtenidos

        return view('otra_vista', compact('clientes'));
    }
}
