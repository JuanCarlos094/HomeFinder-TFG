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
                        <a href="{{ route('admin.cups_servicios.create') }}" class="btn btn-primary">Registrar nuevo servicio</a><br><br>
                        <table class="table table-bordered" id="cups_servicio_table">
                            <thead>
                                <tr>
                                    <th>Cliente</th>
                                    <th>Servicio</th>
                                    <th>Unidad</th>
                                    <th>Precio</th>
                                    <th>Consumo</th>
                                    <th>Inicio prestacion</th>
                                    <th>Fin prestacion</th>
                                    <th>Descuento</th>
                                    <th>Inicio Descuento</th>
                                    <th>Fin Descuento</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cups_servicios as $cups_servicio)
                                <tr>
                                    @foreach ($cups as $cup)
                                        @if($cup->id == $cups_servicio->cups_id)
                                            @foreach ($clientes as $cliente)
                                                @if($cliente->id == $cup->cliente_id)
                                            <td>{{$cliente->razon_social}}</td>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                    @foreach ($servicios as $servicio)
                                        @if($servicio->id == $cups_servicio->servicio_id)
                                            <td>{{$servicio->nombre_servicio}}</td>
                                        @endif
                                    @endforeach
                                    @foreach ($unidades as $unidad)
                                        @if($unidad->id == $cups_servicio->unidad_id)
                                            <td>{{$unidad->unidad}}</td>
                                            <td>{{$unidad->precio}}</td>
                                        @endif
                                    @endforeach
                                    <td>{{$cups_servicio->consumo}}</td>
                                    <td>{{$cups_servicio->inicio_prestacion}}</td>
                                    <td>{{$cups_servicio->fin_prestacion}}</td>
                                    <td>{{$cups_servicio->descuento}}</td>
                                    <td>{{$cups_servicio->fecha_inicio_descuento}}</td>
                                    <td>{{$cups_servicio->fecha_fin_descuento}}</td>
                                    <td>
                                      
                                        <a href="{{ route('admin.cups_servicios.edit', $cups_servicio->id) }}" class="btn btn-success">
                                            Editar
                                        </a>

                                        <form action="{{ route('admin.cups_servicios.destroy', $cups_servicio->id) }}" id="delete_form" method="POST" onsubmit="return confirm('Esta seguro que desea eliminar el registro?')" style="display: inline-block;">
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
            $('#cups_servicio_table').DataTable();
        });
    </script>
    @endsection