<?php
    $soma = 0;

    for ($x = 86; $x < 901; $x++) {
        if ($x % 2 == 0){
            echo "$x ";
        }
        
        $soma += $x; 
    }

    echo "<br>O resultado da soma é: " .$soma;
?>

