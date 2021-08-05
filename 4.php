<?php

$dias = array("Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo");

$tamanho = count($dias);

echo "O array tem tamanho: $tamanho <br>";

for ($x = 0; $x <= $tamanho; $x++){
    echo $dias[$x] . "<br>";
}

?>