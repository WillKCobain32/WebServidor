<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!function_exists("protect")){
    function protect(){
    
    if(!isset($_SESSION)){
    session_start();
    }

    if(!isset($_SESSION["usuarios"]) || !is_numeric($_SESSION["usuarios"])){
    header("Localtion: index.php");

           }

       }
  }
    
    
    
    ?>
</body>
</html>