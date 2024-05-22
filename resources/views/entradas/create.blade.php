<!DOCTYPE html>
<html>
<head>
    <title>Agregar Entrada</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Agregar Entrada</h1>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('entradas.store') }}" method="POST">
            @csrf
            <div>
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion">{{ old('descripcion') }}</textarea>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>
