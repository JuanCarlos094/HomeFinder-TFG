@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de CUPS</h1>
            </div>
        </div>
    </div>
</div>
@if(session('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>

    </div>
  @endif
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.cups.create') }}" class="btn btn-primary"> Nuevo cup</a><br><br>
                        <table class="table table-bordered" id="cup_table">
                            <thead>
                                <tr>
                                    <th>ID del cliente dueño</th>
                                    <th>Codigo de cup</th>
                                    <th>Direccion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cups as $cup)
                                <tr>
                                    <td>{{ $cup->cliente_id ?? 'N/A' }}</td>
                                    <td>{{ $cup->cod_cups ?? 'N/A' }}</td>
                                    <td>{{ $cup->direccion ?? 'N/A' }}</td>
                                    <td>
    
                                        <a href="{{ route('admin.cups.edit', $cup->id) }}" class="btn btn-success">
                                            Editar
                                        </a>
                                        @role('CEO')
                                        <form action="{{ route('admin.cups.destroy', $cup->id) }}" id="delete_form" method="POST" onsubmit="return confirm('Esta seguro que desea eliminar el registro?')" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-danger" value="Eliminar">
                                        </form>
                                        @else
                                         Para eliminar, pedir permiso al CEO
                                        @endrole
                                     
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
@endsection
@section('scripts')
    <script>
         $(document).ready(function() {
            $('#cup_table').DataTable();
        });
    </script>
    @endsection