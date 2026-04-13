<!DOCTYPE html>

<?php


    include("config.php");

    session_start();

    $erro = [];
    
    if(isset($_POST["email"]) && strlen($_POST['email']) > 0){

    $email = $mysqli->real_escape_string($_POST['email']);
    $_SESSION['email_login'] = $email;
    $senha_digitada = $_POST['senha'];
   

    $sql_code = "SELECT senha, idUsuario FROM usuarios WHERE email = '$_SESSION[email]'";
    $sql_query = $mysqli->query($sql_code) or die(mysqli_error($mysqli));
    $dado = $sql_query->fetch_assoc();
    $total = $sql_query->num_rows; 
    

    if($total == 0){
        $erro[] = "Este email nao pertence a nenhum usuario";
    }else{
        if(password_verify($senha_digitada, $dado["senha"])){
            $_SESSION['usuarios'] = $dado['idUsuario'];
            header('Location: LoginTeste.php');
            exit();
    }else{
    $erro[] = 'Senha incorreta';

        
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
    <title>Login</title>
</head>
<body>

  //  <?php 
  //  if(count($erro) > 0)
  //   foreach($erro as $msd){
   //     echo "<p>$msg<p>";

   // }
   // ?>
    <div>
    <form action="TesteLogin.php" method="POST">
        <p><input value="" name="email" placeholder="E-mail" type="text"></p>
        <p><input value="" name="senha" type="password"></p>
        
        <p><input value="Entrar" name="submit" type="submit"></p>

    </form>
    </div>  
    <form action="" method="POST"></form>
        <p><a href="ForgetThePassword.php" target="_blank">Esqueceu sua senha?</a></p>
        <p><a href="cadastro.php" target="_blank">Cadastrar</a></p>
    </form>
      


</body>
</html>