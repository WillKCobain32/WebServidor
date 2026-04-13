<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php

    if (isset($_POST["Cadastrar"])) {

    include("config.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];


    $result = mysqli_query($mysqli, "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')");

    header("Location: index.php");
    }
    
    ?>
    
    <form action="cadastro.php" method="POST">
     <p><h1>Cadastro</h1></p>   
    <p><input value=""  placeholder="nome" name="nome" type="text"></p>
    <p><input value="" placeholder="E-mail" name="email" type="text"></p>
    <p><input value="" name="senha" type="password"></p>
    <p><input value="Cadastrar" name="Cadastrar" type="submit"></p>


    </form>

</body>
</html>