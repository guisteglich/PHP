<!DOCTYPE html><html><body>
<?php

$server="localhost";
$user="root";
$pass="guilherme10";
$db = "db";

try{
    $conn = new PDO("mysql:host=$server", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO programadores (nome, site)
    VALUES ('Pedro C.', 'www.pcprogramador.com.br');";
    $conn->exec($sql);

    $last_id = $conn->lastInsertId();
    echo "Novo registro criado. Último ID inserido: $last_id";

    $new_sql = "SELECT * FROM programadores";
    $result = $conn->query($new_sql);
    $rows = $result->fetchAll();

    print_r($rows);

    }
catch(PDOException $e){
    echo $sql . "<br" . $e->getMessage();
}

$conn = null;

?>
</body></html>