<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
# Numeros del 50 al 80
    for ($i = 50; $i <= 80; $i++) {
            if($i % 2 == 0) {
                echo $i , ", ";
            }
        }
    echo "Primer ejercicio"

?>

<br>

<?php 
#Numeros del -17 al 17
    for ($o = 17; $o >= -17; $o--) {
        echo $o . ", ";
    }
    echo "Segundo ejercicio"
?>

<br>

<?php
#Tabla de 6
    for ($e = 0; $e <= 10; $e++) {
        echo "6 x ", $e,  " = ", 6*$l;
    }
        
?>

</body>

</html>