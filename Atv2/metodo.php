<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>

    <form method = "POST" action="validacao.php">
        <label> Nome: </label>
        <input type="text" name="nome" id="nome">

        <label> Idade: </label>
        <input type="text" name="idade" id="idade">
        <br>

        <label> Senha: </label>
        <input type="password" name="senha" id="senha">

        <label> E-mail: </label>
        <input type="email" name="email" id="email">
        <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "Obtido via" .$_POST["nome"] ." método POST";
        } 
        else{
            echo " Obtido via ".$_POST["nome"] . "método GET";
        }
    ?>

    <br>
    <p>----------------------------------------------------------------------------------</p>

    <form method = "GET" action="validacao.php">
        <label> Nome: </label>
        <input type="text" name="nome" id="nome">

        <label> Idade: </label>
        <input type="number" name="idade" id="idade">
        <br>

        <label> Senha: </label>
        <input type="password" name="senha" id="senha">

        <label> E-mail: </label>
        <input type="email" name="email" id="email">
        <input type="submit">
    </form>
  
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "Obtido via" .$_POST["nome"] ." método POST";
        } 
        else{
            echo " Obtido via ".$_POST["nome"] . "método GET";
        }
    ?>
</body>
</html>

