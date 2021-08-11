<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>

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

    <form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
    echo "<h2>Your Input:</h2>";
    echo $nome;
    echo "<br>";
    echo $idade;
    echo "<br>";
    echo $senha;
    echo "<br>";
    echo $email;
    echo "<br>";

?>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "Usuário " .$_POST["nome"] ." obtido via método POST";
        } 
        else{
            echo "Usuário " .$_GET["nome"] ." obtido via método GET";
        }
    ?>

    <br>
    <p>----------------------------------------------------------------------------------</p>

    <form method = "GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
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
    echo "<h2>Your Input:</h2>";
    echo $nome;
    echo "<br>";
    echo $idade;
    echo "<br>";
    echo $senha;
    echo "<br>";
    echo $email;
    echo "<br>";

?>
  
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "Usuário " .$_POST["nome"] ." obtido via método POST";
        } 
        else{
            echo "Usuário " .$_GET["nome"] ." obtido via método GET";
        }
    ?>
</body>
</html>

