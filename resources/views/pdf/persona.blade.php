{{--JSS--}}
<!DOCTYPE html>
<html>
<head>
    <title>Información de la Persona</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h2>Información de la Persona</h2>
    <p><strong>Nombre:</strong> {{ $persona->nombre }}</p>
    <p><strong>Cédula:</strong> {{ $persona->cedula }}</p>
    <p><strong>Teléfono:</strong> {{ $persona->telefono }}</p>
    <p><strong>Dirección:</strong> {{ $persona->direccion }}</p>
</body>
</html>
