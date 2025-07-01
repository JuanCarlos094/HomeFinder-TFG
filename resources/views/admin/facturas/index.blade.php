@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listado de Facturas</h1>
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
                        <a href="{{ route('admin.facturas.create') }}" class="btn btn-primary"> Nueva Factura</a><br><br>
                        <table class="table table-bordered" id="factura_table">
                            <thead>
                                <tr>
                                    <th>ID del cliente dueño</th>
                                    <th>Codigo de la factura</th>
                                    <th>Direccion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($facturas as $factura)
                                <tr>
                                    <td>{{ $factura->cliente_id ?? 'N/A' }}</td>
                                    <td>{{ $factura->codigo_factura ?? 'N/A' }}</td>
                                    <td>{{ $factura->direccion ?? 'N/A' }}</td>
                                    <td>
                                        <a href="{{ route('admin.facturas.show', $factura->id) }}" class="btn btn-primary">
                                            Ver CUPS
                                        </a>
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
            $('#factura_table').DataTable();
        });
    </script>
@endsection
