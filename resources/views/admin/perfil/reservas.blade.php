@extends('layouts.admin')

@section('content')
<section class="py-5 container">
    <h2 class="mb-4 fw-bold text-center" style="color: #3B67EC;">Mis Reservas</h2>

    @if(session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    @if($reservas->count())
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle text-center">
            <thead class="table-primary">
                <tr>
                    <th>Inmueble</th>
                    <th>Precio</th>
                    <th>Habitaciones</th>
                    <th>Baños</th>
                    <th>Metros</th>
                    <th>Ciudad</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->inmueble->titulo }}</td>
                    <td>
                        {{ is_numeric($reserva->inmueble->precio) 
                                    ? number_format($reserva->inmueble->precio, 0, ',', '.') . ' €'
                                    : $reserva->inmueble->precio }}
                    </td>
                    <td>{{ $reserva->inmueble->habitaciones ?? 'N/D' }}</td>
                    <td>{{ $reserva->inmueble->banos ?? 'N/D' }}</td>
                    <td>{{ $reserva->inmueble->metros ? $reserva->inmueble->metros . ' m²' : 'N/D' }}</td>
                    <td>{{ $reserva->inmueble->ciudad ?? 'N/D' }}</td>
                    <td>{{ \Carbon\Carbon::parse($reserva->fecha)->format('d/m/Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($reserva->hora)->format('H:i') }}</td>
                    <td>
                        <a href="{{ $reserva->inmueble->link }}" target="_blank" class="btn btn-sm btn-outline-primary mb-1">
                            Ver Oferta
                        </a>

                        <a href="{{ route('pdf.reserva', $reserva->id) }}" class="btn btn-sm btn-outline-warning mb-1" target="_blank">
                            PDF de la reserva
                        </a>

                        <form action="{{ route('admin.reservas.destroy', $reserva->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de cancelar esta reserva?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Cancelar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="text-center mt-5 text-muted fst-italic">
        No tienes reservas registradas.
    </div>
    @endif
</section>
@endsection