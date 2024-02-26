@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Editar Cup</h1>
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
                        <form method="POST" action="{{ route('admin.cups.update', $cup->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="cliente_id" class="required">Cliente</label>
                                <select name="cliente_id" id="cliente_id">
                                @foreach ($clientes as $cliente)
                                <option value="{{ old('cliente_id', $cup->cliente_id) }}" class="form-control">{{$cliente->id}} - {{$cliente->NIF}} - {{$cliente->razon_social}}></option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cod_cups" class="required">Codigo de cup</label>
                                <input type="text" name="cod_cups" id="cod_cups" class="form-control {{ $errors->has('cod_cups') ? 'is-invalid' : '' }}" placeholder="Ingrese el codigo del cup" value="{{ old('cod_cups', $cup->cod_cups) }}">
                                @if ($errors->has('cod_cups'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('cod_cups') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="direccion" class="required">Direccion</label>
                                <input type="text" name="direccion" id="direccion" class="form-control {{ $errors->has('direccion') ? 'is-invalid' : '' }}" placeholder="Ingrese la direccion del cup" value="{{ old('direccion', $cup->direccion) }}">
                                @if ($errors->has('direccion'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{ route('admin.cups.index') }}">
                                        <i class="fa fa-fw fa-lg fa-arrow-left"></i>
                                        Regresar
                                    </a>
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-fw fa-lg fa-check-circle"></i> Editar
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
