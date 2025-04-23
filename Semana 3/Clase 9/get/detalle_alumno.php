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

// Obtener la matrícula del alumno desde GET
$id = $_GET['id'] ?? '';
//echo "$id <br>";

// Verificar si el alumno existe
$encontrado = [];
foreach($alumnos as $alumno){
    if($alumno['id'] == $id){
        $encontrado = $alumno;
        break;
    }
}

if(count($encontrado)!=0):
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Alumno</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .detalle-alumno {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .campo {
            margin-bottom: 15px;
        }
        .campo strong {
            display: inline-block;
            width: 120px;
            color: #3498db;
        }
        .volver {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 15px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .volver:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Detalle del Alumno</h1>
    <div class="detalle-alumno">
        <div class="campo">
            <strong>Matrícula:</strong> <?php echo $encontrado['id']; ?>
        </div>
        <div class="campo">
            <strong>Nombre:</strong> <?php echo $encontrado['nombre']; ?>
        </div>
        <div class="campo">
            <strong>Edad:</strong> <?php echo $encontrado['edad']; ?> años
        </div>
        <div class="campo">
            <strong>Carrera:</strong> <?php echo $encontrado['carrera']; ?>
        </div>
        <div class="campo">
            <strong>Email:</strong> <?php echo $encontrado['email']; ?>
        </div>
        <div class="campo">
            <strong>Promedio:</strong> <?php echo $encontrado['promedio']; ?>
        </div>
    </div>
    
    <a href="lista_alumnos.php" class="volver">Volver a la lista</a>
</body>
</html>
<?php else: echo "No se encontró el estudiante";endif;?>

