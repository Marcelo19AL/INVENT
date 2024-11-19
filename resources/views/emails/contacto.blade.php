<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo mensaje de contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            margin: 0 0 10px;
        }

        strong {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Nuevo mensaje</h2>
        <p><strong>Nombre:</strong> {{ $mensaje['nombre'] }}</p>
        <p><strong>Celular:</strong> {{ $mensaje['celular'] }}</p>
        <p><strong>Correo electrónico:</strong> {{ $mensaje['email'] }}</p>
        <p><strong>Asunto:</strong> {{ $mensaje['asunto'] }}</p>
        <p><strong>Mensaje:</strong> {{ $mensaje['mensaje'] }}</p>
    </div>
</body>

</html>

