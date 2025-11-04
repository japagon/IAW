<?php

//1 --> True
//0 --> False

// Esto hace que los parametros que le indicamos sean exactamente esos.
declare(strict_types=1);

// Creamos una funcion llamada sum en la cual $a debe der entero y $b tiene que se con decimales
function sum(int $a, float $b) {

//Aqui imprimimos el que va a hacer la funcion que es $a + $b
    echo $a + $b;
}

// ($a "10" + $b "15.22")
sum(10,15.22);

?>