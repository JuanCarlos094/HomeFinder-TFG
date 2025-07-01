<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Listado de Usuarios</title>
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
    </style>
</head>
<body>

<h1>{{ $title }}</h1>

<h2>Listado de Clientes</h2>
    <br/>
    <br/>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->rol }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="footer">
        Generado el {{ $date }}
    </div>

</body>
</html>