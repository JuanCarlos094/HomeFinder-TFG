@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Editar servicio</h1>
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
                        <form method="POST" action="{{ route('admin.servicios.update', $servicio->id) }}">
                            @csrf
                            @method('PUT')
                    
                            <div class="form-group">
                                <label for="nombre_servicio" class="required">Nombre de servicio</label>
                                <input type="text" name="nombre_servicio" id="nombre_servicio" class="form-control {{ $errors->has('nombre_servicio') ? 'is-invalid' : '' }}" placeholder="Ingrese el codigo del servicio" value="{{ old('nombre_servicio', $servicio->nombre_servicio) }}">
                                @if ($errors->has('nombre_servicio'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('nombre_servicio') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="tipo_servicio" class="required">Tipo de servicio</label>
                                <input type="text" name="tipo_servicio" id="tipo_servicio" class="form-control {{ $errors->has('tipo_servicio') ? 'is-invalid' : '' }}" placeholder="Ingrese la tipo_servicio del servicio" value="{{ old('tipo_servicio', $servicio->tipo_servicio) }}">
                                @if ($errors->has('tipo_servicio'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('tipo_servicio') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{ route('admin.servicios.index') }}">
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
