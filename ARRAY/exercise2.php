<?php
$modules = array("IAW", "SAD" ,"SRI", "OGS", "PROYECTO", "ING", "GBD");
    echo "<h1>MODULES OF THE 2º YEAR</h1>";
    echo "<ul>";
    foreach ($modules as $a) {
        echo "<li>", $a, "</li>";
    }
    echo "</ul>";
    echo "<div>";
    echo "Total de modulos: ", count($modules);
?>