<!DOCTYPE html>
<html>
<head>
    <title>Agregar Vehículo</title>
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
        form div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Agregar Vehículo</h1>

        <form action="{{ route('vehiculos.store') }}" method="POST">
            @csrf
            <div>
                <label for="placa">Placa:</label>
                <input type="text" id="placa" name="placa" required>
            </div>
            <div>
                <label for="modelo">Modelo:</label>
                <input type="text" id="modelo" name="modelo" required>
            </div>
            <div>
                <label for="propietario">Propietario:</label>
                <input type="text" id="propietario" name="propietario" required>
            </div>
            <button type="submit" class="btn">Guardar</button>
            <a href="{{ route('vehiculos.index') }}" class="btn">Cancelar</a>
        </form>
    </div>
</body>
</html>
