<?php
# 2. Given the coefficients of a second degree equation, deliver its roots.

// Formula --  ax^2 + bx + c = 0

$a = 10;
$b = 30;
$c = 5;

$radicando = $b**2 - 4*$a * $c;

if ($radicando >= 0) {
    $ecuacion_2grado = ( - $b + sqrt($radicando)) / (2*$a);
    $ecuacion_2grado1 = ( - $b - sqrt($radicando)) / (2*$a);
    echo "Las raices cuadradas que salen son ", $ecuacion_2grado, " y ", $ecuacion_2grado1;
}
else 
    echo "No tiene raiz";

?>