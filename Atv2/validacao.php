<?php
    $nome = $idade = $senha = $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = test_input($_POST["nome"]);
        $idade = test_input($_POST["idade"]);
        $senha = test_input($_POST["senha"]);
        $email = test_input($_POST["email"]);
        
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        // $data = htmlspecialchars($data);
        return $data;
    }
?>