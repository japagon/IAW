<?php

    $dsn = "mysql:host=localhost;dbname=YourStore";
    $user = "root";
    $password = "";

    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>