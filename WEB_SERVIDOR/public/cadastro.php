<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php
    include("config.php");

    session_start();

    if(isset($_POST["email"]) && strlen($_POST["email"]) > 0){
















    }
    
    
    
    
    
    
    
    
    
    
    
    ?>

    <form action="METHOD">
     <p><h1>Cadastro</h1></p>   
    <p><input value=""  placeholder="nome" name="nome" type="text"></p>
    <p><input value="" placeholder="E-mail" name="email" type="text"></p>
    <p><input value="" name="senha" type="password"></p>
    <p><input value="Cadastrar" name="Cadastrar" type="submit"></p>


    </form>


</body>
</html>