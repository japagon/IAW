<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Saludo</title>
</head>
<body>
    
    <?php

        echo "<h1> Hola, ", $_SESSION["name"], " ", $_SESSION["surname"], "</h1>";
    ?>
</body>
</html>