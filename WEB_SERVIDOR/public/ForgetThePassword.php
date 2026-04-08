<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir senha</title>
</head>
<body>

    <?php
    include("config.php");
    
    if(isset($_POST["ok"])){

     $email = $mysqli->escape_string($_POST["email"]);

     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $erro[] = "E-mail invalido.";
     }    

    $sql_code = "SELECT senha, idUsuario FROM usuarios WHERE email = '$_SESSION[email]'";
    $sql_query = $mysqli->query($sql_code) or die(mysqli_error($mysqli));
    $dado = $sql_query->fetch_assoc();
    $total = $sql_query->num_rows; 

    if($total == 0){
        $erro[] = "E-mail informado nao existe no bando de dados.";
    }

     if(count($erro) == 0 && $total > 0){
     
     $novasenha = substr(md5(time()), 0, 6);
     $nscriptografada = md5(md5($novasenha));
   

    if(mail($email,"Sua nova senha","Sua nova senha: " .$novasenha)){

    $sql_code = "UPDATE usuarios SET senha = '$nscriptografada' WHERE email = '$email'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    IF($sql_query){
        $erro[] = "Senha alterada com sucesso.";
    }

            }
        }
    }



    ?>

    <?php 
    if(count($erro) > 0){

    foreach($erro as $msd){
        echo "<p>$msg<p>";

    }
    }

    ?>

    <form method="POST" action="">
        <input value="<?php echo $_POST["email"] ?>" placeholder="Seu e-mail" name="email" type="text">
        <input name="ok" value="ok" type="sumbit">
    </form>
</body>
</html>