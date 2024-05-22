<!DOCTYPE html>
<html>
<head>
    <title>Lista de Vehículos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-danger {
            background-color: #DC3545;
        }
        .btn-warning {
            background-color: #FFC107;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Vehículos</h1>

        <a href="{{ route('vehiculos.create') }}" class="btn">Agregar Vehículo</a>

        <form action="{{ route('vehiculos.index') }}" method="GET" style="margin-top: 20px;">
            <input type="text" name="searchText" placeholder="Buscar..." value="{{ request('searchText') }}">
            <button type="submit" class="btn">Buscar</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Modelo</th>
                    <th>Propietario</th>
                    <th>Fecha de Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehiculos as $vehiculo)
                    <tr>
                        <td>{{ $vehiculo->placa }}</td>
                        <td>{{ $vehiculo->modelo }}</td>
                        <td>{{ $vehiculo->propietario }}</td>
                        <td>{{ $vehiculo->created_at }}</td> <!-- Mostrar la fecha de creación -->
                        <td>
                            <a href="{{ route('vehiculos.show', $vehiculo->id) }}" class="btn btn-warning">Ver</a>
                            <a href="{{ route('vehiculos.edit', $vehiculo->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $vehiculos->links() }}
    </div>
</body>
</html>
