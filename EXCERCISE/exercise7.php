<?php

# 7. Given three numbers, deliver an output in which they appear ordered from the biggest to the
# smallest.

# Dame 3 numeros, en el que se muestren ordenados del mas grande al mas pequeño

$num1 = 8;
$num2 = 10;
$num3 = 12;

if ($num1 >= $num2 && $num1 >= $num3){
    if($num2 >= $num3){
        echo "El orden es: ", $num1, ", ", $num2, ", ", $num3;
        echo "El orden es: ", $num1, ", ", $num3, ", ", $num2;
    }
} elseif ($num2 >= $num1 && $num2 >= $num3){
    if($num1 >= $num3){
        echo "El orden es: ", $num2, ", ", $num1, ", ", $num3;
        echo "El orden es: ", $num2, ", ", $num3, ", ", $num1;
    }
} else {
    if($num1 >= $num2){
        echo "El orden es: ", $num3, ", ", $num1, ", ", $num2;
        echo "El orden es: ", $num3, ", ", $num2, ", ", $num1;
    }
}

?>