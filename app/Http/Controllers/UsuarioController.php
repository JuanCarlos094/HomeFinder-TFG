<?php

namespace App\Http\Controllers;


use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios =  usuario::all();

        return view('admin.usuarios.index', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

/**
 * Show the form for editing the specified resource.
 */
public function edit(string $id)
{
    $usuario = Usuario::findOrFail($id);
    return view('admin.perfil.edit', compact('usuario'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $usuario = Usuario::findOrFail($id);

    // Validación base
    $rules = [
        'nombre' => 'required|string|max:255',
        'email' => 'required|email|unique:usuarios,email,' . $id,
    ];

    // Solo los admin pueden cambiar el rol
    if (auth()->user()->hasRole('admin')) {
        $rules['rol'] = 'required|in:admin,usuario';
    }

    $validated = $request->validate($rules);

    // Actualización base
    $usuario->update([
        'nombre' => $validated['nombre'],
        'email' => $validated['email'],
    ]);

    // Si es admin y envió el campo rol, se actualiza también el rol de Spatie
    if (auth()->user()->hasRole('admin') && $request->filled('rol')) {
        $usuario->rol = $request->rol;
        $usuario->syncRoles([$request->rol]);
        $usuario->save();
        if ($request->rol=="admin" ) return redirect()->route('admin.usuarios.index')->with('success', 'Usuario actualizado correctamente.');

    }
    return redirect()->route('admin.home')->with('success', 'Perfil actualizado correctamente.');


}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $usuario = Usuario::findOrFail($id);

    // Si NO es el mismo usuario ni es admin, denegar
    if (auth()->user()->id !== $usuario->id && !auth()->user()->hasRole('admin')) {
        abort(403, 'No autorizado para eliminar este usuario.');
    }

    // Si el usuario se está autoeliminando, cerrar sesión
    if (auth()->user()->id === $usuario->id) {
        auth()->logout();
    }

    $usuario->delete();

    return redirect('/')->with('success', 'Usuario eliminado correctamente.');
}


    

public function editPassword()
{
    return view('admin.perfil.cambiar-password');
}

public function updatePassword(Request $request)
{
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8|confirmed',
    ]);

    if (!Hash::check($request->current_password, auth()->user()->password)) {
        return back()->withErrors(['current_password' => 'La contraseña actual no es correcta']);
    }

    $user = auth()->user();
    $user->password = Hash::make($request->new_password);
    $user->save();

    return redirect()->route('admin.home')->with('success', 'Contraseña actualizada correctamente.');
}


    
}
