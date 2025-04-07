<?php
$a = 5;
$b = 10;

//IF
/*if($a<$b){
    echo "a es menor que b"; echo "\n";
}

echo "Estoy fuera de la condicional de IF"; echo "\n";

//IF-ELSE
if($a<$b){ //verdadero
    echo "a es menor que b"; echo "\n";
}else{//falso
    echo "a NO es menor que b"; echo "\n";
}

echo "Estoy fuera de la condicional de IF-ELSE"; echo "\n";

//ELSE IF
if($a<$b){
    echo "a es menor que b"; echo "\n";
}elseif($a==$b){
    echo "a es igual que b"; echo "\n";
}else{
    echo "a es mayor que b"; echo "\n";
}

echo "Estoy fuera de la condicional de IF-ELSEIF-ELSE"; echo "\n";


//SINTAXIS ALTERNATIVA
if($a<$b):
    echo "a es menor que b"; echo "\n";
elseif($a==$b):
    echo "a es igual que b"; echo "\n";
else:
    echo "a es mayor que b"; echo "\n";
endif;*/

//SWITCH
$i=2;

switch ($i){
    case 0:
        echo "i es igual a 0";
        break;
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
    case 3:
        echo "i es igual a 3";
        break;
    default:
        echo "Fuera de rango";
}
?>