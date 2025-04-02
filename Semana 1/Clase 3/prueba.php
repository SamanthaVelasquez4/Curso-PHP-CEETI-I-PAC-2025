<?php

//VARIABLES
/*$entero = 10; 
$bool1 = true; 
$bool2=false;
$string = "cadena";
$null = null;
$float = 20.2;

var_dump($entero);
var_dump($bool1);
var_dump($bool2);
var_dump($string);
var_dump($null);
var_dump($float);*/

//OPERADORES ARITMETICOS

/*$numCadena = false; //string o bool
var_dump($numCadena);
$numCadena = +$numCadena; // float o int
var_dump($numCadena);

$num1 = 10;
$num2 = 5;

echo $num1 + $num2; echo "\n";
echo $num1 - $num2; echo "\n";
echo $num1 * $num2; echo "\n";
echo $num1 / $num2; echo "\n";
echo $num1 % $num2; echo "\n";
echo $num1 ** $num2; echo "\n";*/


//OPERADORES DE INCREMENTO/DISMINUCIÓN
/*$a=1; //Pre-decremento
echo "$a\n"; // 1
echo --$a; echo "\n"; // decremento
echo "$a\n"; //0*/

//OPERADORES DE COMPARACION Y LOGICOS
/*$int1 = 10;
$int2 = 10.00;

var_dump($int1);
var_dump($int2);

echo $int1 == $int2; echo "\n";
var_dump($int1 === $int2);*/

var_dump(10>5 and 20>5 and 5 > 5); //todas las comparaciones deben ser verdaderas
var_dump(10>5 or 20>5 or 5 > 5); //solo necesita que una comparacion sea verdadera


//OPERADORES DE ASIGNACION
$cont = 1;

$cont = $cont + 3;
echo $cont; echo "\n"; //4
$cont = $cont + 3;
echo $cont; echo "\n"; //7
$cont = $cont + 3;
echo $cont; echo "\n"; //10
$cont += 3;
echo $cont; echo "\n"; //13