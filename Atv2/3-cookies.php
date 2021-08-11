<?php
    #7 dias de cookie
    $timecookie = (60*60*24*7);

    #5 anos de cookie
    $timecookie5y = (60*60*24*365*5);

    setcookie("user", "Guilherme", time($timecookie), "/");

    setcookie("user2", "Geromel", time($timecookie5y), "/");

    setcookie("user2", "Geromel", time(-(60*60*24*365*5)));
?>

<html><body>

<!-- // if(!isset($_COOKIE["user"]) and (!isset($_COOKIE['user2']))) {
//     echo "Cookie user não setado!";
// } else {
//     echo "Cookie user setado! <br>";
//     echo "Valor é: " .$_COOKIE["user"] ;
//     echo "<br>Valor 2 é: " .$_COOKIE['user2'];
// }
// -->

<?php
    if(count($_COOKIE) > 0) {
        echo "Cookies estão habilitados!";
    }else {
        echo "Cookies estão desabilitados!";
    }
?>
</body></html>