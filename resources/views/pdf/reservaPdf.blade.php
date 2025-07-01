<!DOCTYPE html>
<html>
<head>
    <title>Reserva PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; }
        th { background-color: #f5f5f5; }
    </style>
</head>
<body>
    <h1 class="text-center">{{ $title }}</h1>
    <table class="table">
        <tr><th>Inmueble</th><td>{{ $reserva->inmueble->titulo }}</td></tr>
        <tr><th>Precio</th><td>{{ is_numeric($reserva->inmueble->precio) ? number_format($reserva->inmueble->precio, 0, ',', '.') . ' €' : $reserva->inmueble->precio }}</td></tr>
        <tr><th>Habitaciones</th><td>{{ $reserva->inmueble->habitaciones ?? 'N/D' }}</td></tr>
        <tr><th>Baños</th><td>{{ $reserva->inmueble->banos ?? 'N/D' }}</td></tr>
        <tr><th>Metros</th><td>{{ $reserva->inmueble->metros ?? 'N/D' }} m²</td></tr>
        <tr><th>Ciudad</th><td>{{ $reserva->inmueble->ciudad ?? 'N/D' }}</td></tr>
        <tr><th>Fecha</th><td>{{ \Carbon\Carbon::parse($reserva->fecha)->format('d/m/Y') }}</td></tr>
        <tr><th>Hora</th><td>{{ \Carbon\Carbon::parse($reserva->hora)->format('H:i') }}</td></tr>
        <tr><th>Generado</th><td>{{ $date }}</td></tr>
    </table>
</body>
</html>
