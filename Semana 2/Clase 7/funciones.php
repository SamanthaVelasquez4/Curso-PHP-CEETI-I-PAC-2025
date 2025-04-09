<?php
/*
Las funciones pueden ser:
-Funciones sin parametros y sin retorno
-Funciones sin parametros y con retorno
-Funciones con parametros y sin retorno
-Funciones con parametros y con retorno 

function nombreFuncion(parametros, separados, por, comas) {
  return variable/expresion;
} 
*/

ejemplo4();
//Función con parámetros y sin retorno
function ejemplo($nombre, $apellido){
    echo "Adios ".$nombre." ".$apellido."\n";
}

ejemplo("Dorian", "Contreras");

//Función básica sin parámetros

function ejemplo2(){
    echo "Hola"."\n";
}

ejemplo2();

//Función con parámetros y con retorno
function ejemplo3($x, $y){
    return $x+$y;
}

$retorno = ejemplo3(100,9856) - 2500 * 400;

echo($retorno."\n");


//Función con parámetro opcional (valor por defecto)
function ejemplo4($nombre = "Invitado"){
    echo "Hola ".$nombre."\n";
}

ejemplo4();
ejemplo4("Martha");

/* 
Función anónima (closure)
$nombreFuncion = function(parametros) {
    return valor/expresion;
};
*/

$resta = function($x,$y){
    return $x - $y;
};

echo $resta(96,5)."\n";


/*
Funcion fecha
$nombre = fn(parametros) => expresion;
*/

$restaFlecha = fn($x,$y) => $x -$y;

echo $restaFlecha(900,100);

?>