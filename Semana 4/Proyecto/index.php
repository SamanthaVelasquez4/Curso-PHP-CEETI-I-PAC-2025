<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="header-actions">
            <h1>Mis Tareas</h1>
            <a href="views/create.php" class="btn btn-primary">+ Nueva Tarea</a>
        </div>
        
        <div class="task-list">
            <div class="task-card">
                <div class="task-title">Comprar víveres</div>
                <div class="task-description">Leche, huevos, pan, frutas y verduras</div>
                <div class="task-meta">
                    <span class="status-badge status-pending">Pendiente</span>
                    · Creada: 15/05/2023 10:30
                </div>
                <div class="task-actions">
                    <a href="views/edit.php" class="btn btn-primary">Editar</a>
                    <button class="btn btn-danger">Eliminar</button>
                </div>
            </div>
            
            <div class="task-card completed">
                <div class="task-title">Reunión con equipo</div>
                <div class="task-description">Preparar presentación para la reunión de proyectos</div>
                <div class="task-meta">
                    <span class="status-badge status-completed">Completada</span>
                    · Creada: 14/05/2023 09:15
                </div>
                <div class="task-actions">
                    <a href="views/edit.php" class="btn btn-primary">Editar</a>
                    <button class="btn btn-danger">Eliminar</button>
                </div>
            </div>
            
            <div class="task-card">
                <div class="task-title">Hacer ejercicio</div>
                <div class="task-description">30 minutos de cardio y rutina de pesas</div>
                <div class="task-meta">
                    <span class="status-badge status-pending">Pendiente</span>
                    · Creada: 13/05/2023 18:45
                </div>
                <div class="task-actions">
                    <a href="views/edit.php" class="btn btn-primary">Editar</a>
                    <button class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>