<?php
# 13. Given an integer, deliver a message to point out whether it is prime or not.

$numero = 3;
$contador= 0;

for($i = 1; $i <= $numero; $i++){

    if($numero % $i == 0){
        echo " ";

        $contador = $contador +1;
    }

}

if ($contador = 2){
    echo "El numero es primo. ";
} else {
    echo "El numero no es primo. ";
}

?>