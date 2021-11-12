<!DOCTYPE html><html><body>
<?php

$server="localhost";
$user="root";
$pass="guilherme10";
$db = "db";

try{
    $conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $sql = "CREATE DATABASE $db";
    // $conn->exec($sql);

    $sql = "CREATE TABLE programadores (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        nome VARCHAR(80) NOT NULL,
        site VARCHAR(120) DEFAULT NULL,
        PRIMARY KEY(id));";
    $conn->exec($sql);
    echo "Tabela de programadores foi criada!";

    }
catch(PDOException $e){
    echo $sql . "<br" . $e->getMessage();
}


$conn = null;

?>
</body></html>