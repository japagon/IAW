
<?php
# 8. Given three numbers, deliver an output to point out the biggest and the smallest.

# Dados tres números, genera un resultado que indique cuál es el mayor y cuál es el menor.

$n1 = 10;
$n2 = 8;
$n3 = 12;

$grande = max($n1, $n2, $n3);
$pequeño = min($n1, $n2, $n3);

echo "<div> El numero mas grande es: ", $grande, "</div>";
echo "El numero mas pequeño es: ", $pequeño;

?>