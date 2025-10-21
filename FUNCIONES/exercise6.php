<?php

function area($base, $height){
    return ($base * $height);
}
function perimetro($base, $height){
    return 2 * ($base + $height);
}   

function interchange(&$base, &$height){
    $auxiliary = $base;
    $base = $height;
    $height = $auxiliary;   
}

$base = 10;
$height = 5;            
echo "<div> El area del rectangulo es: " . area($base, $height) . "<div>";
echo "<div> El perimetro del rectangulo es: " . perimetro($base, $height), "<div>";
interchange ($base, $height);
echo "<div> The base now is: ", $base, " And the height is: ", $height, "<div>";
?> 