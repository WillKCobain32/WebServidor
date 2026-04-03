<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
              <?php
        
    function FindByEmail($pdo, $email) {
    $sql = "SELECT * from usuarios where email = :email LIMIT 1";
    $stmt = $pdo->prepare("$sql");
    $stmt->execute(['email' => $email]);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
     
        ?>
     <?=$_SESSION['senha'];?>
</body>
</html>