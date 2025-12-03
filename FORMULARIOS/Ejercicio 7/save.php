<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save dates</title>
</head>
<body>
    <?php
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["surname"] = $_POST["surname"];
    ?>
    <p> Datos guardados con exito</p>
    <a href="greet.php">Ir al saludo</a>

</body>
</html>