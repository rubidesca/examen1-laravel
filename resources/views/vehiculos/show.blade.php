<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Vehículo</title>
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
        .details {
            margin-top: 20px;
        }
        .details div {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalles del Vehículo</h1>

        <div class="details">
            <div>
                <span class="label">Placa:</span> {{ $vehiculo->placa }}
            </div>
            <div>
                <span class="label">Modelo:</span> {{ $vehiculo->modelo }}
            </div>
            <div>
                <span class="label">Propietario:</span> {{ $vehiculo->propietario }}
            </div>
        </div>

        <a href="{{ route('vehiculos.index') }}" class="btn">Volver</a>
        <a href="{{ route('vehiculos.edit', $vehiculo->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
</body>
</html>
