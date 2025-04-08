<?php
//BUCLES

/*
WHILE
while (expr){
    sentencia
}
*/

/*$i = 1;
while ($i<=1000){
    echo $i.', ';
    $i++;
};*/

/* 
DO WHILE
do {
    sentencias
} while (expr);
*/

/*$j=1;
do{
    echo $j.', '; 
    $j++;
}while($j<=1000);*/

/* 
FOR
for (expr1; expr2; expr3){
    sentencia
}
expr1 => contador
expr2 => condicion
expr3 => incremento/decremento 
*/
/*for ($k=1; $k<=1000; $k++){
    echo $k.', ';
};*/

/*
foreach (array as $valor){
    sentencias
}
*/

$personas = [
    "nombre" => "Samantha",
    "apellido"=> "Contreras",
    "edad"=> 21,
    "genero"=> true, //true=mujer  false=hombre
];

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

$carros = [
    [
        "marca" => "Ford",
        "año" => 2020,
        "color" => "Verde",
        "placa" => "HD1-054D0",
        "imagen" => "img/ford.jpg"
    ],
    [
        "marca" => "Toyota",
        "año" => 2022,
        "color" => "Rojo",
        "placa" => "TY2-789A1",
        "imagen" => "img/toyota.jpg"
    ],
];

foreach ($carros as $elemento){
    foreach($elemento as $valor){
        echo $valor.", ";
    }
    echo "\n";
}