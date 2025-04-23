<?php
// Datos de ejemplo (en un caso real vendrían de una base de datos)
$alumnos = [
    [
        'id' =>'A001',
        'nombre' => 'María González',
        'edad' => 20,
        'carrera' => 'Ingeniería Informática',
        'email' => 'maria@ejemplo.edu',
        'promedio' => 8.5
    ],
    [
        'id' => 'A002',
        'nombre' => 'Carlos Pérez',
        'edad' => 22,
        'carrera' => 'Administración de Empresas',
        'email' => 'carlos@ejemplo.edu',
        'promedio' => 7.8
    ],
    [
        'id' => 'A003',
        'nombre' => 'Laura Martínez',
        'edad' => 21,
        'carrera' => 'Derecho',
        'email' => 'laura@ejemplo.edu',
        'promedio' => 9.1
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e3f2fd;
        }
        a {
            color: #2980b9;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Lista de Alumnos</h1>
    
    <table>
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Nombre</th>
                <th>Carrera</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alumnos as $alumno): ?>
            <tr>
                <td><?php echo $alumno['id']; ?></td>
                <td><?php echo $alumno['nombre']; ?></td>
                <td><?php echo $alumno['carrera']; ?></td>
                <td>
                    <a href="detalle_alumno.php?id=<?php echo $alumno['id']; ?>">
                        Ver Detalles
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>