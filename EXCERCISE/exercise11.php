
<?php
# 11. Deliver the factorial of 10.
// Un factorial es un numero multiplicado (5 x 4 x 3 x 2 x 1 = 120)

$factorial = 1;

for ($i = 1; $i <= 10; $i++){
    $factorial *= $i;
}

echo "El factorial es: $factorial";

?>