<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php

        echo "<p> Suma: ", $_POST['uno'] + $_POST['dos'], "</p>";
        echo "<p> Resta: ", $_POST['uno'] - $_POST['dos'], "</p>";
        echo "<p> Multiplicacion: ", $_POST['uno'] * $_POST['dos'], "</p>";

    ?>
</body>
</html>