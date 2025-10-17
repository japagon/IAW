<?php

# 7. Given three numbers, deliver an output in which they appear ordered from the biggest to the
# smallest.

# Dame 3 numeros, en el que se muestren ordenados del mas grande al mas pequeño


// 1
$a = 12;
// 2
$b = 7;
// 3
$c = 20;
// 4
if ($a >= $b && $a >= $c) {
    // 4.1
    if ($b >= $c) {
        echo "$a, $b, $c\n";
    } else {
        echo "$a, $c, $b\n";
    }
} elseif ($b >= $a && $b >= $c) {
    // 4.2
    if ($a >= $c) {
        echo "$b, $a, $c\n";
    } else {
        echo "$b, $c, $a\n";
    }
} else {
    // 4.3 (aquí $c es el mayor)
    if ($a >= $b) {
        echo "$c, $a, $b\n";
    } else {
        echo "$c, $b, $a\n";
    }
}
?>