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
    
    $directorio = 'Descargas/';
    if (!is_dir($directorio)) {
        mkdir($directorio, 0755, true);
    } 
    $nombreArchivo = date("d.m.Y H:i:s"). '.' . $extension;
    $rutaDestino = $directorio . $nombreArchivo;
    
    if (!move_uploaded_file($_FILES['foto']['tmp_name'], $rutaDestino)) {
        $errores['foto'] = 'Error al subir la imagen';
    }
}

if($bandera){
    echo "$email, $colorFavorito, $genero <br>";
    foreach($intereses as $interes){
        echo "$interes <br>";
    }
}else{
    echo "Hubo algun campo incorrecto";
}
    

?>