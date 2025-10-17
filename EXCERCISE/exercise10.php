<?php
# 10. Deliver the sum of the numbers from 1 to 100.

$suma = 0;

for ($numero = 1; $numero <= 100; $numero++) {
    $suma += $numero;
    // Es igual a $suma = $suma + 1
}

echo "La suma de todos los numeros del 1 al 100 es: $suma";

?>
