
<?php
# 8. Given three numbers, deliver an output to point out the biggest and the smallest.

# Dados tres números, genera un resultado que indique cuál es el mayor y cuál es el menor.

$num_1 = 10;
$num_2 = 9;
$num_3 = 27;

$max = max($num_1, $num_2, $num_3); #Este coje el numero mas grande dentro de las variables y la hace en una $max

$min = min($num_1, $num_2, $num_3); #Este coje el numero mas pequeño dentro de las variables y la hace en una $min

echo "El numero mas grande es: $max <br>";
echo "El numero mas pequeño es: $min";

?>