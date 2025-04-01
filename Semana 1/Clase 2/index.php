<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Básica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        h1 {
            color: #007bff;
        }
        p {
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Hola Mundo</h1>
    <p>Que fecha es?</p>
    <p>La fecha actual es: 
        <?php 
            echo date("d.m.Y H:i:s");
        ?>.
    </p>
</body>
</html>

