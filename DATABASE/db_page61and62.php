<?php

    include "library.php";

 try {

    $sql = "UPDATE readers SET phone=? WHERE reader_id=?;";
    $statement = $connection->prepare($sql);
    $statement->bindParam(1, $tel);
    $statement->bindParam(2, $id);

    $tel = 655998877;
    $id = 4;
    $statement->execute();

    echo "The reader with id ", $id, " has this new telephone number ", $tel, ".";
    }

    catch (PDOException $exception){
        echo "The connection failed. ", $exception->getmessage();
    }
 $connection = null;
 
?>