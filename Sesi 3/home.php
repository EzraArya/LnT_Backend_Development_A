<?php 
    session_start();

    $username = $_SESSION['USERNAME']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<h1>Hello, $username</h1>"
    ?>
    <a href="login.php">Logout</a>
</body>
</html>