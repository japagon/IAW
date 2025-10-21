<?php
$precipitacion = array( "Monday" => 12.5, 
                        "Tuesday" => 0.0, 
                        "Wednesday" => 30.0, 
                        "Thursday" => 80.0, 
                        "Friday" => 14.3, 
                        "Saturday" => 10.0, 
                        "Sunday" => 0.0);

    $suma = 0;
    foreach ($precipitacion as $dias => $valor) {
        $suma = $suma + $valor;
    }
    echo "<h1> PRECIPITACION </h1>";

    echo "La precipitacion total de la semana es: " . $suma . "<div>";

    foreach ($precipitacion as $day => $valor) {
        echo "La precipitacion del dia ", $day, " es: ", $valor, "<div>";
    }
    echo "<div>";


?>