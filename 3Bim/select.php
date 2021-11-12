<!DOCTYPE html><html><body>
<?php

$server="localhost";
$user="root";
$pass="guilherme10";
$db = "db";

try{
    $conn = new PDO("mysql:host=$server", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM programadores WHERE LIKE '%.br%'";
    $result = $conn->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    print_r($rows);

}
catch(PDOException $e){
    echo $sql . "<br" . $e->getMessage();
}

$conn = null;

?>
</body></html>
