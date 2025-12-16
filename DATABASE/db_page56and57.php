<?php

 $dsn = "mysql:host=localhost;dbname=YourStore";
 $user = "root";
 $password = "";
 
try {

    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,

    PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM customers ORDER BY Name";
    $statement = $connection->query($sql);

    echo "<ul>";
        foreach ($statement->fetchAll(PDO::FETCH_COLUMN,2) as $name){
            echo "<li>", $name, "</li>";
    }

    echo "</ul>";
    }


 catch (PDOException $exception){
    echo "The connection failed. ", $exception->getmessage();
 }

 $connection = null;
?>