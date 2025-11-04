<?php
# 12. Given an integer, deliver all its divisors.

$num_entero = 12;

echo "Los divisores son: ";

for ($n = 1; $n <= $num_entero; $n++){
    if($num_entero % $n == 0){
        echo "  ", $n;
    }   
}
?>