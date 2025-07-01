@extends('layouts.admin')

@section('content')
@role('admin')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de Usuarios</h1>
            </div>
            <div class="col-sm-6 d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{ url('generate-pdf-user') }}" class="btn btn-warning">Generar PDF de Usuarios</a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Usuarios</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered" id="user_table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $user)
                                <tr>
                                    <td>{{ $user->nombre }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->rol }}</td>
                                    <td>
                                        <a href="{{ route('admin.perfil.edit', $user->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                        @if (auth()->user()->id !== $user->id)
                                        <form action="{{ route('admin.usuarios.destroy', $user->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endrole
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#user_table').DataTable();
    });
</script>
@endsection
