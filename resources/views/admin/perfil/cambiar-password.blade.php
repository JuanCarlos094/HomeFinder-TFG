@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Cambiar contraseña</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('perfil.password.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label>Contraseña actual</label>
            <input type="password" name="current_password" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Nueva contraseña</label>
            <input type="password" name="new_password" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Confirmar nueva contraseña</label>
            <input type="password" name="new_password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar nueva contraseña</button>
    </form>
</div>
@endsection
