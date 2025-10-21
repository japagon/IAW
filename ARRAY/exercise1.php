<?php
$drinks = array("Coffe", "Tea", "Water", "Beer", "Wine", "Soft drink");
    echo "<h1>DRINKS</h1>";
    echo "Choose on of the XXX drinks:";
    echo "<ul>";
    foreach($drinks as $b) {
        echo "<li>", $b, "</li>";
    }
    echo "</ul>";
    echo "<div>";
    echo "El numero total es: ", count($drinks);
?>