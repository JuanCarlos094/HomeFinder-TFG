@extends('layouts.app')

@section('content')

<section class="py-5" style="background-color: #f9f9f9; min-height: 80vh;">
    @if(session('error'))
    <div class="position-fixed top-50 start-50 translate-middle alert alert-danger text-center shadow-lg fade show" role="alert" style="z-index: 9999; width: 90%; max-width: 500px;">
        <strong>Error:</strong> {{ session('error') }}
        <button type="button" class="btn-close position-absolute top-0 end-0 m-2" data-bs-dismiss="alert" aria-label="Cerrar"></button>
    </div>
    @endif
    <div class="container">
        <h1 class="mb-4 fw-bold text-center" style="color: #3B67EC; font-family: 'Poppins', sans-serif;">
            Filtra tu búsqueda
        </h1>

        {{-- Botón solo visible para admin --}}
        @role('admin')
        <div class="mb-4 text-center">
            <form action="{{ route('admin.scraping.todo') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Cargar Inmuebles</button>
            </form>
        </div>
        @endrole

        {{-- Formulario de filtro --}}
        <form method="GET" class="mb-5">
            <div class="row g-3 align-items-end bg-primary bg-opacity-10 rounded p-4">
                <div class="col-md-2">
                    <label class="form-label fw-bold">Tipo</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="operacion" id="todo" value="" {{ request('operacion') == '' ? 'checked' : '' }}>
                        <label class="form-check-label" for="todo">Todo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="operacion" id="compra" value="compra" {{ request('operacion') == 'compra' ? 'checked' : '' }}>
                        <label class="form-check-label" for="compra">Compra</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="operacion" id="alquiler" value="alquiler" {{ request('operacion') == 'alquiler' ? 'checked' : '' }}>
                        <label class="form-check-label" for="alquiler">Alquiler</label>
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="vivienda" class="form-label fw-bold">Vivienda</label>
                    <select id="vivienda" class="form-select" name="vivienda">
                        <option value="">Selecciona</option>
                        <option value="casa" {{ request('vivienda') == 'casa' ? 'selected' : '' }}>Casa</option>
                        <option value="piso" {{ request('vivienda') == 'piso' ? 'selected' : '' }}>Piso</option>
                        <option value="atico" {{ request('vivienda') == 'atico' ? 'selected' : '' }}>Ático</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="estado" class="form-label fw-bold">Estado</label>
                    <select id="estado" class="form-select" name="estado">
                        <option value="">Selecciona</option>
                        <option value="nueva" {{ request('estado') == 'nueva' ? 'selected' : '' }}>Obra nueva</option>
                        <option value="segunda" {{ request('estado') == 'segunda' ? 'selected' : '' }}>Segunda mano</option>
                        <option value="reformar" {{ request('estado') == 'reformar' ? 'selected' : '' }}>A reformar</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label class="form-label fw-bold">Precio (€)</label>
                    <div class="d-flex gap-2">
                        <input type="number" name="precio_min" class="form-control" placeholder="Desde" value="{{ request('precio_min') }}">
                        <input type="number" name="precio_max" class="form-control" placeholder="Hasta" value="{{ request('precio_max') }}">
                    </div>
                </div>

                <div class="col-md-2">
                    <label class="form-label fw-bold">Habitaciones</label>
                    <input type="number" name="habitaciones" class="form-control" min="1" max="30" placeholder="Ej: 3" value="{{ request('habitaciones') }}">
                </div>

                <div class="col-md-2">
                    <label for="ciudad" class="form-label fw-bold">Ciudad</label>
                    <input type="text" name="ciudad" class="form-control" placeholder="Ej: Elche" value="{{ request('ciudad') }}">
                </div>
            </div>

            <div class="text-center mt-3">
                <button type="submit" class="btn btn-outline-primary px-5">Buscar</button>
            </div>
        </form>

        {{-- Resultados --}}
        @if($inmuebles->count())
        <div class="row">
            @foreach($inmuebles as $inmueble)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $inmueble->titulo }}</h5>
                        <p class="card-text">
                            <strong>Precio:</strong>
                            {{ is_numeric($inmueble->precio) ? number_format($inmueble->precio, 0, ',', '.') . ' €' : $inmueble->precio }}
                        </p>
                        <p class="card-text"><strong>Metros:</strong> {{ $inmueble->metros ? $inmueble->metros . ' m²' : 'N/D' }}</p>
                        <p class="card-text"><strong>Habitaciones:</strong> {{ $inmueble->habitaciones ?? 'N/D' }}</p>
                        <p class="card-text"><strong>Baños:</strong> {{ $inmueble->banos ?? 'N/D' }}</p>
                        <p class="card-text"><strong>Ciudad:</strong> {{ $inmueble->ciudad ?? 'N/D' }}</p>
                        <p class="card-text"><strong>Vivienda:</strong> {{ $inmueble->vivienda ?? 'N/D' }}</p>
                        <p class="card-text"><strong>Estado:</strong> {{ $inmueble->estado ?? 'N/D' }}</p>
                        <p class="card-text"><strong>Portal:</strong> {{ $inmueble->portal }}</p>
                        <a href="{{ $inmueble->link }}" target="_blank" class="btn btn-sm btn-outline-primary">Ver Oferta</a>
                        @auth
                        <!-- Botón que abre el modal -->
                        <button type="button" class="btn btn-sm btn-outline-success mt-2" data-bs-toggle="modal" data-bs-target="#reservaModal{{ $inmueble->id }}">
                            Reservar
                        </button>

                        <!-- Modal para hacer la reserva -->
                        <div class="modal fade" id="reservaModal{{ $inmueble->id }}" tabindex="-1" aria-labelledby="reservaModalLabel{{ $inmueble->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="{{ route('admin.reservas.store') }}" method="POST" class="modal-content">
                                    @csrf
                                    <input type="hidden" name="inmueble_id" value="{{ $inmueble->id }}">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="reservaModalLabel{{ $inmueble->id }}">Reservar Inmueble</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="fecha" class="form-label">Fecha</label>
                                            <input type="date" name="fecha" class="form-control" required min="{{ now()->addDay()->format('Y-m-d') }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="hora" class="form-label">Hora</label>
                                            <select name="hora" class="form-select" required>
                                                @for ($h = 9; $h <= 19; $h++)
                                                    <option value="{{ str_pad($h, 2, '0', STR_PAD_LEFT) }}:00">
                                                    {{ str_pad($h, 2, '0', STR_PAD_LEFT) }}:00
                                                    </option>
                                                    @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Confirmar Reserva</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endauth

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center mt-5 text-muted fst-italic">
            No se encontraron inmuebles con esos criterios.
        </div>
        @endif
    </div>
</section>

{{-- JavaScript --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const compraRadio = document.getElementById('compra');
        const alquilerRadio = document.getElementById('alquiler');
        const estadoSelect = document.getElementById('estado');

        function toggleEstado() {
            if (alquilerRadio.checked) {
                estadoSelect.disabled = true;
                estadoSelect.value = '';
            } else {
                estadoSelect.disabled = false;
            }
        }

        toggleEstado();
        compraRadio.addEventListener('change', toggleEstado);
        alquilerRadio.addEventListener('change', toggleEstado);
    });

    document.querySelectorAll('input[type="date"]').forEach(input => {
        input.addEventListener('change', function() {
            const selectedDate = new Date(this.value);
            if (selectedDate.getDay() === 0) { // Domingo
                alert('No se pueden hacer reservas los domingos.');
                this.value = ''; // Limpia la selección
            }
        });
    });
</script>
@endsection