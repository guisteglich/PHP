<?php

function areCirculo($raio) {

    $area = 3.1415 * pow($raio,2);

    echo "$area";

}

// areCirculo(1);

for ($x = 100; $x <=200; $x++){
    if ($x % 2 == 0){
        $resultado = areCirculo($x);
        echo " é o resultado para $x $resultado <br>";
    }   
}

?>