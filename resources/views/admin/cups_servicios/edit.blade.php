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
                        <form method="POST" action="{{ route('admin.cups_servicios.update', $cups_servicio->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="cups_id" class="required">CUPS</label>
                                <select name="cups_id" id="cups_id">
                                @foreach ($cups as $cup)
                                <option value="{{old('id', $cup->id)}}" class="form-control">{{$cup->id}} - {{$cup->cod_cups}} - {{$cup->direccion}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="cups_id" class="required">Servicio</label>
                            <select name="servicio_id" id="servicio_id">
                                @foreach ($servicios as $servicio)
                                <option value="{{old('id', $servicio->id)}}" class="form-control">{{$servicio->id}} - {{$servicio->nombre_servicio}} - {{$servicio->tipo_servicio}}</option>
                                @endforeach
                                </select>
                            </div>
                            <label for="unidad_id" class="required">Unidad</label>
                            <select name="unidad_id" id="unidad_id">
                                @foreach ($unidades as $unidad)
                                <option value="{{old('id', $unidad->id)}}" class="form-control">{{$unidad->id}} - {{$unidad->unidad}} - {{$unidad->precio}} - {{$unidad->mes}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="consumo" class="required">Consumo</label>
                                <input type="text" name="consumo" id="consumo" class="form-control {{ $errors->has('consumo') ? 'is-invalid' : '' }}" placeholder="Ingrese el consumo" value="{{ old('consumo', $cups_servicio->consumo) }}">
                                @if ($errors->has('consumo'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('consumo') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="inicio_prestacion" class="required">Inicio Prestacion Servicio</label>
                                <input type="date" name="inicio_prestacion" id="inicio_prestacion" class="form-control {{ $errors->has('inicio_prestacion') ? 'is-invalid' : '' }}" value="{{ old('inicio_prestacion', $cups_servicio->inicio_prestacion) }}">
                                @if ($errors->has('inicio_prestacion'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('inicio_prestacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="fin_prestacion" class="required">Fin Prestacion Servicio</label>
                                <input type="date" name="fin_prestacion" id="fin_prestacion" class="form-control {{ $errors->has('fin_prestacion') ? 'is-invalid' : '' }}" value="{{ old('fin_prestacion', $cups_servicio->fin_prestacion) }}">
                            </div>
                            <div class="form-group">
                                <label for="descuento" class="required">Descuento</label>
                                <input type="text" name="descuento" id="descuento" class="form-control {{ $errors->has('descuento') ? 'is-invalid' : '' }}" placeholder="Ingrese el descuento" value="{{ old('descuento', $cups_servicio->descuento) }}">
                                @if ($errors->has('descuento'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('descuento') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="fecha_inicio_descuento" class="required">Inicio Descuento</label>
                                <input type="date" name="fecha_inicio_descuento" id="fecha_inicio_descuento" class="form-control {{ $errors->has('fecha_inicio_descuento') ? 'is-invalid' : '' }}" value="{{ old('fecha_inicio_descuento', $cups_servicio->fecha_inicio_descuento) }}">
                                @if ($errors->has('fecha_inicio_descuento'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('fecha_inicio_descuento') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="fecha_fin_descuento" class="required">Fin Descuento</label>
                                <input type="date" name="fecha_fin_descuento" id="fecha_fin_descuento" class="form-control {{ $errors->has('fecha_fin_descuento') ? 'is-invalid' : '' }}" value="{{ old('fecha_fin_descuento', $cups_servicio->fecha_fin_descuento) }}">
                            </div>
                            <div class="row d-print-none mt-2">
                                <div class="col-12 text-right">
                                    <a class="btn btn-danger" href="{{ route('admin.cups_servicios.index') }}">
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
