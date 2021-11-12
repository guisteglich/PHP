<!DOCTYPE html><html><body>
<?php

$server="localhost";
$user="root";
$pass="guilherme10";
$db = "db";

try{
    $conn = new PDO("mysql:host=$server", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO programadores(nome, site) VALUES (:n, :s);";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':n', $nom);
    $stmt->bindParam(':s', $sit);

    $nom = "Nome 1"; $sit = "Site 1"; $stmt->execute();
    $nom = "Nome 2"; $sit = "Site 2"; $stmt->execute();
    $nom = "Nome 3"; $sit = "Site 3"; $stmt->execute();


}
catch(PDOException $e){
    echo $sql . "<br" . $e->getMessage();
}

$conn = null;

?>
</body></html>