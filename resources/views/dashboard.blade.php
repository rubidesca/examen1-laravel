<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 200px;
            background-color: #333;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="#">Dashboard</a>
        <a href="{{ route('vehiculos.index') }}">Vehículos</a>
        <a href="{{ route('entradas.index') }}">Entradas</a>
    </div>

    <div class="content">
        <!-- Aquí irá el contenido dinámico de tu aplicación -->
        <h1>Bienvenido al Dashboard</h1>
        <p>Selecciona una opción del menú lateral.</p>
    </div>
</body>
</html>
