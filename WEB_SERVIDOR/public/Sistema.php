<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sistema</title>
</head>
<body>
    <?php
    session_start();
    include("config.php");
    if ((isset($_SESSION['email']) == true) && (!isset($_SESSION['senha'])) == true) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);    
    header("Location: index.php");

    }
    $logado = $_SESSION['email'];
    
    ?>


   <?php
   echo "<h1>Bem vindo <u>$logado</u></h1>";
   ?>
</body>
</html>