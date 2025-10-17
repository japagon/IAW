<?php

//1 --> True
//0 --> False
declare(strict_types=1);

function sum(int $a, float $b) {
    echo $a + $b;
}

// ($a "10" + $b "15.22")
sum(10,15.22);