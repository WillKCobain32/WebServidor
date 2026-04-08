<!DOCTYPE html>

<?php
    include("config.php");
    
    if(isset($_POST["email"]) && strlen($_POST['email']) > 0){

    if(!isset($_SESSION));
    {
        session_start();
    }

    $_SESSION['email'] = $mysqli->escape_string($_POST['email']);
    $_SESSION['senha'] = md5(md5($_POST['senha']));
    

    $sql_code = "SELECT senha, idUsuario FROM usuarios WHERE email = '$_SESSION[email]'";
    $sql_query = $mysqli->query($sql_code) or die(mysqli_error($mysqli));
    $dado = $sql_query->fetch_assoc();
    $total = $sql_query->num_rows; 
    

    if($total == 0){
        $echo[] = "Este email nao pertence a nenhum usuario";
    }else{
        if($dado["senha"] == $_SESSION['senha']){
            $_SESSION['usuarios'] = $dado['idUsuario'];
    }else{
        $erro[] = "senha incorreta";
    }

          }

   
     //if(count($erro) == 0 || !isset($erro)){
      // echo "<script>alert('login efetuado com sucesso')location.href='sucesso.php';</script>";

       //     }

     }


    
    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  //  <?php 
  //  if(count($erro) > 0)
  //   foreach($erro as $msd){
   //     echo "<p>$msg<p>";

   // }
   // ?>

    <form method="POST" action="">
        <p><input value="<?php echo $_SESSION['email']; ?>" name="email" placeholder="E-mail" type="text"></p>
        <p><input value="" name="senha" type="password"></p>
        <p><a href="ForgetThePassword.php" target="_blank">Esqueceu sua senha?</a></p>
        <p><input value="Entrar" type="submit"></p>
    </form>
      


</body>
</html>