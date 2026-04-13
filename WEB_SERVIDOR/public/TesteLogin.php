<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TesteLogin</title>
</head>
<body>
    <?php

    session_start();


    if(isset($_POST['submit']) && !empty($_POST['email'])){

 
    //Acessa
    include("config.php");
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
    $result = $mysqli->query($sql);

    //print_r(mysqli_fetch_array($result));

    if(mysqli_num_rows($result) < 1){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: index.php");

    }else{
    $_SESSION["email"] = $email;
    $_SESSION["senha"] = $senha;
    header("Location: Sistema.php");

    }
    
    
    
    
    }else{
        header('location: index.php');
    }
    
    
    
    ?>
</body>
</html>