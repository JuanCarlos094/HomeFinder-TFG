@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Nueva Factura</h1>
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

                        <form method="POST" action="{{ route('admin.facturas.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="cliente_id" class="required">Cliente</label>
                                <select name="cliente_id" id="cliente_id" class="form-control">
                                    @foreach ($clientes as $cliente)
                                        <option value="{{ $cliente->id }}" {{ old('cliente_id') == $cliente->id ? 'selected' : '' }}>
                                            {{ $cliente->id }} - {{ $cliente->NIF }} - {{ $cliente->razon_social }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="codigo_factura" class="required">Código de Factura</label>
                                <input type="text" name="codigo_factura" id="codigo_factura" class="form-control {{ $errors->has('codigo_factura') ? 'is-invalid' : '' }}" placeholder="Ingrese el código de factura" value="{{ old('codigo_factura', '') }}">
                                @if ($errors->has('codigo_factura'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('codigo_factura') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="direccion" class="required">Dirección</label>
                                <input type="text" name="direccion" id="direccion" class="form-control {{ $errors->has('direccion') ? 'is-invalid' : '' }}" placeholder="Ingrese la dirección" value="{{ old('direccion', '') }}">
                                @if ($errors->has('direccion'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{ route('admin.facturas.index') }}">
                                        <i class="fa fa-fw fa-lg fa-arrow-left"></i>
                                        Regresar
                                    </a>
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-fw fa-lg fa-check-circle"></i> Guardar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
