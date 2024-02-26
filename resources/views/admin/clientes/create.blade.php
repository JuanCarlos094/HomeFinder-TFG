@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Nuevo Cliente</h1>
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

                        <form method="POST" action="{{ route('admin.clientes.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="NIF" class="required">NIF del cliente </label>
                                <input type="text" name="NIF" id="NIF" class="form-control {{ $errors->has('NIF') ? 'is-invalid' : '' }}" placeholder="Ingrese el NIF del cliente" value="{{ old('NIF', '') }}">
                                @if ($errors->has('NIF'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('NIF') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="razon_social" class="required">Razón Social del cliente </label>
                                <input type="text" name="razon_social" id="razon_social" class="form-control {{ $errors->has('razon_social') ? 'is-invalid' : '' }}" placeholder="Ingrese la razón social del cliente" value="{{ old('razon_social', '') }}">
                                @if ($errors->has('razon_social'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('razon_social') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="nombre_comercial" class="required">Nombre Comercial del cliente</label>
                                <input type="text" name="nombre_comercial" id="nombre_comercial" class="form-control {{ $errors->has('nombre_comercial') ? 'is-invalid' : '' }}" placeholder="Ingrese el nombre comercial del cliente" value="{{ old('nombre_comercial', '') }}">
                                @if ($errors->has('nombre_comercial'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('nombre_comercial') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="url" class="required">URL del cliente</label>
                                <input type="text" name="url" id="url" class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" placeholder="Ingrese la URL del cliente" value="{{ old('url', '') }}">
                                @if ($errors->has('url'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="SIMEL" class="required">SIMEL del cliente</label>
                                <input type="text" name="SIMEL" id="SIMEL" class="form-control {{ $errors->has('SIMEL') ? 'is-invalid' : '' }}" placeholder="Ingrese el SIMEL del cliente" value="{{ old('SIMEL', '') }}">
                                @if ($errors->has('SIMEL'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('SIMEL') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{ route('admin.clientes.index') }}">
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
