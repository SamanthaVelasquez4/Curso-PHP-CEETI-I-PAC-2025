<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carros</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        img {
            width: 80px;
            height: auto;
        }
    </style>
</head>
<body>

    <h2>Lista de Carros</h2>

    <?php
    $carros = [
        [
            "marca" => "Ford",
            "año" => 2020,
            "color" => "Verde",
            "placa" => "HD1-054D0",
            "imagen" => "img/ford.jpg"
        ],
        [
            "marca" => "Toyota",
            "año" => 2022,
            "color" => "Rojo",
            "placa" => "TY2-789A1",
            "imagen" => "img/toyota.jpg"
        ]
    ];
    ?>

    <table>
        <tr>
            <th>Marca</th>
            <th>Año</th>
            <th>Color</th>
            <th>Placa</th>
            <th>Imagen</th>
        </tr>
        <?php foreach ($carros as $carro): ?>
            <tr>
                <td><?php echo $carro["marca"]; ?></td>
                <td><?php echo $carro["año"]; ?></td>
                <td><?php echo $carro["color"]; ?></td>
                <td><?php echo $carro["placa"]; ?></td>
                <td><img src="<?php echo $carro["imagen"]; ?>" alt="<?php echo $carro["marca"]; ?>"></td>
            </tr>

        <?php endforeach; ?>
    </table>

</body>
</html>
