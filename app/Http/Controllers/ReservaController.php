<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Usuario;
use App\Models\Inmueble;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
    /**
     * Mostrar todas las reservas del usuario autenticado.
     */
    public function index()
    {
        $reservas = Reserva::where('usuario_id', auth()->id())
            ->with('inmueble')
            ->get();

        return view('admin.perfil.reservas', compact('reservas'));
    }

    /**
     * Mostrar formulario de creación.
     */
    public function create(Inmueble $inmueble)
    {
        return view('reservas.create', compact('inmueble'));
    }

    /**
     * Almacenar nueva reserva.
     */
    public function store(Request $request)
{
    $request->validate([
        'inmueble_id' => 'required|exists:inmuebles,id',
        'fecha' => 'required|date|after:today',
        'hora' => ['required', 'regex:/^(09|1[0-9]):00$/'],
    ]);

    // Validar que no sea domingo
    $fecha = \Carbon\Carbon::parse($request->fecha);
    if ($fecha->isSunday()) {
        return back()->withErrors(['fecha' => 'No se puede reservar en domingo.'])->withInput();
    }

    // Validar rango de hora
    $horaPermitida = (int) explode(':', $request->hora)[0];
    if ($horaPermitida < 9 || $horaPermitida > 19) {
        return back()->withErrors(['hora' => 'Las reservas deben ser entre las 09:00 y las 19:00.'])->withInput();
    }

    // Verificar si ya existe una reserva para ese inmueble en esa fecha y hora
    $existe = Reserva::where('inmueble_id', $request->inmueble_id)
        ->where('fecha', $request->fecha)
        ->where('hora', $request->hora)
        ->exists();

    if ($existe) {
    $inmueble = Inmueble::find($request->inmueble_id);
    return redirect()->back()->with('error', 'Lo sentimos. El inmueble "' . $inmueble->titulo . '" ya está reservado el ' .
        \Carbon\Carbon::parse($request->fecha)->format('d/m/Y') . ' a las ' . $request->hora . '.');
} 

    // Crear la reserva
    Reserva::create([
        'usuario_id' => auth()->id(),
        'inmueble_id' => $request->inmueble_id,
        'fecha' => $request->fecha,
        'hora' => $request->hora,
    ]);

    return redirect()->route('admin.reservas.index')->with('success', 'Reserva realizada correctamente.');
}

    /**
     * Eliminar reserva.
     */
    public function destroy(Reserva $reserva)
    {
        // Solo permite eliminar si es dueño o admin
        if (auth()->id() === $reserva->usuario_id || auth()->user()->hasRole('admin')) {
            $reserva->delete();
            return redirect()->route('admin.reservas.index')->with('success', 'Reserva eliminada correctamente.');
        }

        abort(403, 'No autorizado.');
    }

    
}
