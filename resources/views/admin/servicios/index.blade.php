@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de Servicios</h1>
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
                        <a href="{{ route('admin.servicios.create') }}" class="btn btn-primary"> Nuevo servicio</a><br><br>
                        <table class="table table-bordered" id="servicio_table">
                            <thead>
                                <tr>
                                    <th>Nombre de servicios</th>
                                    <th>Tipo de servicio</th>
                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($servicios as $servicio)
                                <tr>
                                    <td>{{$servicio->nombre_servicio}}</td>
                                    <td>{{$servicio->tipo_servicio}}</td>
                                
                                    <td>
                                        <a href="{{ route('admin.servicios.edit', $servicio->id) }}" class="btn btn-success">
                                            Editar
                                        </a>

                                        <form action="{{ route('admin.servicios.destroy', $servicio->id) }}" id="delete_form" method="POST" onsubmit="return confirm('Esta seguro que desea eliminar el registro?')" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-danger" value="Eliminar">
                                        </form>
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
            $('#servicio_table').DataTable();
        });
    </script>
    @endsection