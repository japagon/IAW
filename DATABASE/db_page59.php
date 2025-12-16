<?php

include "yourstore.php";
 

    $sql = "SELECT * FROM products ORDER BY Name";
    $statement = $connection->query($sql);

    echo "<ul>";
        foreach ($statement->fetchAll(PDO::FETCH_COLUMN,1) as $name){
            echo "<li>", $name, "</li>";
    }

    echo "</ul>";


?>
