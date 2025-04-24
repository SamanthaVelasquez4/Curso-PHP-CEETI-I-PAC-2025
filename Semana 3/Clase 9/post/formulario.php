<?php

$bandera = true;


if(empty($_POST['nombre'])){
    $nombre = '';
    $bandera = false;
    //echo "Nombre Vacio <br>";
}else{
    $nombre = $_POST['nombre'];
}

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $bandera = false;
    //echo "Email incorrecto <br>";
}

$edad = $_POST['edad'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$pais = $_POST['pais'];
$genero = $_POST['genero'];
$intereses = $_POST['intereses'];
$comentarios = $_POST['comentarios'];
$satisfaccion = $_POST['satisfaccion'];
$colorFavorito = $_POST['colorFavorito'];

$nombreArchivo = '';
if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $extension = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    //echo "$extension <br>";

    //obtener url del directorio actual
    $directorio = __DIR__ . '\\Descargas\\';

    //crear directorio si no existe
    if (!is_dir($directorio)) {
        mkdir($directorio, 0755, true);
    }

    //nombre de archivo
    $nombreArchivo = date('Y-m-d_H-i-s'). '.' . $extension;
    $rutaDestino = $directorio . $nombreArchivo;
    
    if (!move_uploaded_file($_FILES['foto']['tmp_name'], $rutaDestino)) {
        $errores['foto'] = 'Error al subir la imagen';
        $bandera = false;
    }
}

if($bandera){
    echo "Usuario creado correctamente";
}else{
    echo "Hubo algun campo incorrecto";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4361ee;
            --primary-dark: #3a56d4;
            --secondary: #3f37c9;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --success: #4cc9f0;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            background-color: #f5f7fa;
            color: var(--dark);
            padding: 20px;
        }
        
        .profile-container {
            max-width: 600px;
            margin: 30px auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .profile-header {
            background-color: var(--primary);
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
            margin-bottom: 15px;
        }
        
        .profile-name {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .profile-age {
            font-weight: 300;
            opacity: 0.9;
        }
        
        .profile-body {
            padding: 25px;
        }
        
        .info-group {
            margin-bottom: 20px;
        }
        
        .info-label {
            font-size: 12px;
            text-transform: uppercase;
            color: var(--gray);
            letter-spacing: 1px;
            margin-bottom: 5px;
            display: block;
        }
        
        .info-value {
            font-size: 16px;
            padding: 8px 0;
            border-bottom: 1px solid var(--light-gray);
        }
        
        .interests-container {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 10px;
        }
        
        .interest-tag {
            background-color: var(--success);
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }
        
        .gender-icon {
            width: 20px;
            height: 20px;
            vertical-align: middle;
            margin-right: 5px;
        }
        
        @media (max-width: 600px) {
            .profile-container {
                margin: 10px auto;
            }
            
            .profile-body {
                padding: 20px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Avatar" class="profile-avatar">
            <h1 class="profile-name"><?php echo "$nombre" ?></h1>
            <div class="profile-age">32 años</div>
        </div>
        
        <div class="profile-body">
            <div class="info-group">
                <span class="info-label">Fecha de Nacimiento</span>
                <div class="info-value">15 de marzo de 1991</div>
            </div>
            
            <div class="info-group">
                <span class="info-label">País</span>
                <div class="info-value">
                    <img src="https://flagcdn.com/w20/mx.png" alt="México" title="México">
                    México
                </div>
            </div>
            
            <div class="info-group">
                <span class="info-label">Género</span>
                <div class="info-value">
                    <svg class="gender-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#4361ee">
                        <path d="M289.8 46.8c3.7-9 12.5-14.8 22.2-14.8H424c13.3 0 24 10.7 24 24V168c0 9.7-5.8 18.5-14.8 22.2s-19.3 1.7-26.2-5.2l-33.4-33.4L321 204.2c19.5 28.4 31 62.7 31 99.8c0 97.2-78.8 176-176 176S0 401.2 0 304s78.8-176 176-176c37 0 71.4 11.4 99.8 31l52.6-52.6L295 73c-6.9-6.9-8.9-17.2-5.2-26.2zM400 80l0 0h0v0zM176 416a112 112 0 1 0 0-224 112 112 0 1 0 0 224z"/>
                    </svg>
                    Masculino
                </div>
            </div>
            
            <div class="info-group">
                <span class="info-label">Intereses</span>
                <div class="interests-container">
                    <span class="interest-tag">Programación</span>
                    <span class="interest-tag">Viajes</span>
                    <span class="interest-tag">Fotografía</span>
                    <span class="interest-tag">Música</span>
                    <span class="interest-tag">Deportes</span>
                    <span class="interest-tag">Tecnología</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>