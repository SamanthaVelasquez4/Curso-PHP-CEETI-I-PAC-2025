<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Tarea</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Crear Nueva Tarea</h1>
        
        <form>
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" id="title" name="title" required placeholder="Ej: Comprar víveres">
            </div>
            
            <div class="form-group">
                <label for="description">Descripción (opcional)</label>
                <textarea id="description" name="description" placeholder="Ej: Leche, huevos, pan..."></textarea>
            </div>
            
            <div class="form-actions">
                <a href="../index.php" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar Tarea</button>
            </div>
        </form>
    </div>
</body>
</html>