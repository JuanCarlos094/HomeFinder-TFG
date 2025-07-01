<!DOCTYPE html>
<html>
<head>
    <title>Listado de Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 20px;
        }
        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        h2 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #b5b2b2;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        thead th, tbody td {
            border-color: #dddddd;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 20px;
        }
        .cups-table {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>

    <h2>Listado de Clientes</h2>
    <table>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td><strong>ID:</strong> {{ $cliente->id }}</td>
                    <td><strong>Razón Social:</strong> {{ $cliente->razon_social }}</td>
                    <td><strong>NIF:</strong> {{ $cliente->NIF }}</td>
                    <td><strong>Nombre Comercial:</strong> {{ $cliente->nombre_comercial }}</td>
                </tr>
                <tr>
                    <td colspan="4">
                        <table class="cups-table">
                            <thead>
                                <tr>
                                    <th>Código CUPS</th>
                                    <th>Dirección</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cliente->cups as $cup)
                                    <tr>
                                        <td>{{ $cup->cod_cups }}</td>
                                        <td>{{ $cup->direccion }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        Generado el {{ $date }}
    </div>

</body>
</html>
