<?php

for ($x = 1; $x <=100; $x++){
    $multiplo = $x;

    // echo "$multiplo";

    switch ($multiplo){
        case ($multiplo % 3 == 0):
            echo "DING <br>";
            break;
        case ($multiplo % 5 == 0):
            echo "DOING <br>";
            break;
        case ($multiplo % 7 == 0):
            echo "DUNG <br>";
            break;
        default:
            // echo "";
            echo "$multiplo <br>";
    }
}

?>



