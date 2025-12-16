<?php
 // 1. Cambiado a la base de datos 'Library'
 $dsn = "mysql:host=localhost;dbname=Library";
 $user = "root";
 $password = "";

 try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 2. Consulta adaptada a la tabla 'readers' (name_reader, phone)
    $sql = "INSERT INTO readers (name_reader, phone) VALUES (:name, :phone)";
    
    $statement = $connection->prepare($sql);

    // 3. Corregidas las comillas ‘ ’ por ' ' y vinculación de parámetros
    // Usaremos $contact para el nombre y $telephone para el teléfono
    $statement->bindParam(':name', $contact);
    $statement->bindParam(':phone', $telephone);

    // --- PRIMER INSERT ---
    // Defino todas las variables como en tu original, pero solo se usarán $contact y $telephone
    $customerid = 'PERCA';
    $name = 'Pérez Calero';
    $contact = 'Antonio Pérez';  // Se guardará esto como name_reader
    $position = 'Comercial';
    $city = 'Granada';
    $country = 'España';
    $telephone = '632147852';    // Se guardará esto como phone
    
    $statement->execute();

    // --- SEGUNDO INSERT ---
    $customerid = 'RONCA';
    $name = 'Roncero Carmona';
    $contact = 'Jesús Roncero';
    $position = 'Comercial';
    $city = 'Sevilla';
    $country = 'España';
    $telephone = '615945782';
    
    $statement->execute();

    echo "Lectores insertados correctamente en la tabla readers.";
 }
 catch (PDOException $exception){
    // 4. Corregido getmessage() a getMessage()
    echo "The connection failed. ", $exception->getMessage();
 }
 
 $connection = null;
?>