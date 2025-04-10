<?php

class Persona {
    //atributos o propiedades
    public $nombre;
    public $apellido;
    public $numIdentidad;
    public $edad;

    //funcion __construct
    function __construct($nombre, $b, $c, $d){
        $this->nombre = $nombre;
        $this->apellido = $b;
        $this->numIdentidad = $c;
        $this->edad =$d;
    }

    //metodos
    function presentar(){
        return "Hola, me llamo ".$this->nombre." tengo ".$this->edad." años";
    }
}


$persona1 = new Persona("Maria", "Valladares", "0801-2004-36251",25);

print_r($persona1->presentar());