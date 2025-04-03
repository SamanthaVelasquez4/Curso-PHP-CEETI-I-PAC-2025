
<?php
//ARREGLOS
//Arreglo asociativo con valores
$personas = [
    "nombre" => "Samantha",
    "apellido"=> "Contreras",
    "edad"=> 21,
    "genero"=> true, //true=mujer  false=hombre
];

//var_dump($personas);

/*echo 'Hola '.$personas["nombre"]." ".$personas["apellido"]."<br>"; // \n
echo "Tienes ".$personas["edad"]." años"."<br>";*/

//Arreglos indexados
/*$frutas = ["Manzana", "Pera", "Uva", "Banana"];
            //0         1       2       3
echo $frutas[0]."<br>";*/

//Arreglo vacio
$vacio = [];
var_dump($vacio);

$vacio["nombre"] = "Pedro";
$vacio["edad"] = 30;
$vacio["color"] = "Verde";
$vacio["fruta"] = "Manzana";

$vacio["nombre"] = "Juan";

var_dump($vacio);
print_r($vacio);

$indexado = [];

$indexado[] = 10;
$indexado[] = 65;
$indexado[] = -20;

print_r($indexado);

//Arreglos multidimencionales
$multi = [
    "profesor" => "Juan",
    "clases" => ["Matematicas", "Fisica"],
    "alumnos"=> [
        "alumno1" => [
            "clasesMaria"=> ["EF", "Matematicas"],
            "informacionMaria"=>[
                "nombre"=>"Maria",
                "edad"=>10,
                "genero"=> true,
                "apellido"=> "Gonzales",
            ]
            ],
        "alumno2" => [
            "clasesPedro"=> ["EF", "Matematicas"],
            "informacionPedro"=>[
                "nombre"=>"Pedro",
                "edad"=>10,
                "genero"=> true,
                "apellido"=> "Gonzales",
            ]
        ]
    ]
];
echo $multi["alumnos"]["alumno1"]["informacionMaria"]["edad"];