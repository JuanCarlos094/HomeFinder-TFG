@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de clientes</h1>
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
                        <a href="{{ route('admin.clientes.create') }}" class="btn btn-primary"> Nuevo cliente</a><br><br>
                        <table class="table table-bordered" id="cliente_table">
                            <thead>
                                <tr>
                                    <th>NIF del cliente</th>
                                    <th>Razon Social</th>
                                    <th>Nombre Comercial</th>
                                    <th>URL</th>
                                    <th>SIMEL</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->NIF}}</td>
                                    <td>{{$cliente->razon_social}}</td>
                                    <td>{{$cliente->nombre_comercial}}</td>
                                    <td>{{$cliente->url}}</td>
                                    <td>{{$cliente->SIMEL}}</td>
                                    <td>
                                     
                                        <a href="{{ route('admin.clientes.edit',$cliente->id) }}" class="btn btn-success">
                                            Editar
                                        </a>
                                        
                                        <form action="{{ route('admin.clientes.destroy', $cliente->id) }}" id="delete_form" method="POST" onsubmit="return confirm('Esta seguro que desea eliminar el registro?')" style="display: inline-block;">
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
            $('#cliente_table').DataTable();
        });
    </script>
    @endsection