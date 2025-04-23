<?php

$bandera = true;


if(empty($_POST['nombre'])){
    $nombre = '';
    $bandera = false;
    echo "Nombre Vacio <br>";
}else{
    $nombre = $_POST['nombre'];
}

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $bandera = false;
    echo "Email incorrecto <br>";
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
    echo "$extension <br>";

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
    echo "Usuario creado correctamente <br>$nombre<br>$email<br>$edad<br>$genero<br>";
}else{
    echo "Hubo algun campo incorrecto";
}
    

?>