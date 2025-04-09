<?php
/*
Simulacion de ATM
1. retiro
2. Deposito
3. Mostrar estado de cuenta
4. Salir 
*/

function estadoCuenta($nombre, $cuenta, $montoInicial, $totalDepositado, $totalRetirado){
    $montoFinal = $montoInicial + $totalDepositado - $totalRetirado;
    //buscar en la base de datos la informacion de la cuenta
    echo "------------Estado de Cuenta------------\nNombre: $nombre\nNum cuenta: $cuenta\nMonto inicial: $montoInicial\nTotal depositado: $totalDepositado\nTotal retirado: $totalRetirado\nMonto actual: $montoFinal\n";
}

estadoCuenta("Samantha","HJDGJDYG",2000,0,0);
echo "------------ATM------------\nBienvenido Invitado\n¿Que deseas realizar hoy?\n1.Retiro\n2.Deposito\n3.Estado de cuenta\n4.Salir\n";

//echo "------------Estado de Cuenta------------\nNombre: Maria\nNum cuenta: HGSHTYFT\nMonto inicial: 1000\nTotal depositado: 100\nTotal retirado: 500\nMonto actual: 600";
estadoCuenta("Sam","HJDGJDYG",2000,200,86);
?>