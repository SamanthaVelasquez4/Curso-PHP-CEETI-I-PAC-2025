<?php
/*
Simulacion de ATM
1. retiro
2. Deposito
3. Mostrar estado de cuenta
4. Salir 
*/

class Cuenta{
    //atributos
    public $numCuenta;
    public $nombre;
    public $saldo;

    //construtor
    function __construct($numCuenta, $nombre, $saldo){
        $this->numCuenta = $numCuenta;
        $this->nombre = $nombre;
        $this->saldo = $saldo;
    }

    //metodos
    function deposito($monto){
        if($monto>0){
            $this->saldo+=$monto;
            return "Deposito hecho correctamente";
        }

        return "No se puede hacer el deposito";
    }

    function retiro($monto){
        if($monto>0 && $monto<=$this->saldo){
            $this->saldo-=$monto;
            return "Retiro hecho correctamente";
        }

        return "No se puede hacer el retiro";
    }

    function saldoActual(){
        return $this->saldo;
    }
}


function estadoCuenta($nombre, $cuenta, $montoInicial, $totalDepositado, $totalRetirado){
    $montoFinal = $montoInicial + $totalDepositado - $totalRetirado;
    //buscar en la base de datos la informacion de la cuenta
    echo "------------Estado de Cuenta------------\nNombre: $nombre\nNum cuenta: $cuenta\nMonto inicial: $montoInicial\nTotal depositado: $totalDepositado\nTotal retirado: $totalRetirado\nMonto actual: $montoFinal\n";
}

$cuenta1 = new Cuenta(2025, "Sam", 1000);
$cuenta2 = new Cuenta(2024, "Juan", 5000);


estadoCuenta($cuenta1->nombre,$cuenta1->numCuenta,$cuenta1->saldo,0,0);
echo "------------ATM------------\nBienvenido Invitado\n¿Que deseas realizar hoy?\n1.Retiro\n2.Deposito\n3.Estado de cuenta\n4.Salir\n";
$respuesta = readline("Ingrese su respuesta: ");

switch ($respuesta){
    case 1: //retiro
        $monto = readline("Cuanto desea retirar: ");
        echo $cuenta1->retiro($monto)."\n";
        echo "El saldo actual es de: ".$cuenta1->saldoActual()."\n";
        break;
    case 2: //retiro
        $monto = readline("Cuanto desea retirar: ");
        echo $cuenta1->deposito($monto)."\n";
        echo "El saldo actual es de: ".$cuenta1->saldoActual()."\n";
        break;
    case 3: 
        echo "El saldo actual es de: ".$cuenta1->saldoActual()."\n";
        break;
    case 4:
        echo "Gracias por utilizar el ATM\n";
        break;
    default:
        echo "Respuesta inválida";
}

?>