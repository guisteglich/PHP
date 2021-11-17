<!DOCTYPE html><html><body>
<?php

$server="localhost";
$user="root";
$pass="guilherme10";
$db = "db";

try{
    $conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "
        INSERT INTO programadores 
        VALUES ('guilherme', 'www.gs.com.br')
        ";
    $conn->exec($sql);

    }
catch(PDOException $e){
    echo $sql . "<br" . $e->getMessage();
}


$conn = null;

?>
</body></html>
