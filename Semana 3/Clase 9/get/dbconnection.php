<?php

/*
CRUD -> CREATE, READ, UPDATE, DELETE
SENTENCIAS SQL PARA BASE DE DATOS

1. SELECT -> consultar informacion 
2. INSERT -> agregar un registro
3. UPDATE -> actualiza
4. DELETE -> borrar
*/

$server = "127.0.0.1";
$user = "root";
$password = "";
$db= "alumnos";

$conexion = new mysqli($server, $user, $password, $db);

//var_dump($conexion);

if($conexion->error){
    die("Error de conexion".$conexion->error);
}

?>