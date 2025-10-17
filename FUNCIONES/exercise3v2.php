<?php

// Muestra 6 debido que al & hace que las dos variables
// apunten al mismo sitio
function triple(&$number) {
    $number *= 3;
}

$num = 2;
triple($num);
echo "<div>", $num, "<div>";

?>