@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Editar Usuario</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="@role('admin'){{ route('admin.usuarios.update', $usuario->id) }}@else{{ route('admin.perfil.update', $usuario->id) }}@endrole" method="POST">
    @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $usuario->nombre) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $usuario->email) }}" required>
        </div>
        @role('admin')
        <div class="form-group mb-4">
            <label for="rol">Rol</label>
            <select name="rol" id="rol" class="form-control" required>
                <option value="admin" {{ old('rol', $usuario->rol) == 'admin' ? 'selected' : '' }}>Administrador</option>
                <option value="usuario" {{ old('rol', $usuario->rol) == 'usuario' ? 'selected' : '' }}>Usuario</option>
            </select>
        </div>
        @endrole

        <button type="submit" class="btn btn-success">Guardar Cambios</button>
        @role('admin')
        <a href="{{ route('admin.usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
        @else
        <a href="{{ route('admin.home') }}" class="btn btn-secondary">Cancelar</a>
        @endrole
    </form>
</div>
@endsection