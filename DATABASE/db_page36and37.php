<?php
 // 1. Cambiado a la base de datos 'Library'
 $dsn = "mysql:host=localhost;dbname=Library";
 $user = "root";
 $password = "";

 try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 2. Consulta adaptada: solo usamos Contact (para nombre) y Telephone (para teléfono)
    // Los nombres de los placeholders (:Contact, :Telephone) deben coincidir con el array del execute
    $sql = "INSERT INTO readers (name_reader, phone) VALUES (:Contact, :Telephone)";
    
    $statement = $connection->prepare($sql);

    // --- PRIMER BLOQUE (TOSER) ---
    $customerid = 'TOSER';
    $name = 'Toledo Servant';
    $contact = 'Juan Toledo';
    
    // 3. Corregido: 'Sales' tenía comillas curvadas
    $position = 'Sales'; 
    $city = 'Granada';
    
    // 4. Corregido: Spain no tenía comillas
    $country = 'Spain'; 
    $telephone = '632147852';

    // 5. Corregido el array:
    // - Quitamos las comillas curvadas en los keys (ej: ':CustomerId’ -> ':CustomerId')
    // - Solo enviamos :Contact y :Telephone porque son los únicos que pide el SQL de arriba.
    //   Si enviamos los otros, PDO dará el error "Invalid parameter number".
    $statement->execute(array(
        ':Contact' => $contact, 
        ':Telephone' => $telephone
    ));

    // --- SEGUNDO BLOQUE (RONCA) ---
    $customerid = 'RONCA';
    $name = 'Roncero Carmona';
    $contact = 'Jesús Roncero';
    $position = 'Comercial';
    $city = 'Sevilla';
    $country = 'España';
    $telephone = '615945782';

    // Mismo procedimiento: solo enviamos lo que la consulta SQL espera
    $statement->execute(array(
        ':Contact' => $contact, 
        ':Telephone' => $telephone
    ));
    
    echo "Lectores insertados correctamente.";

 }
 catch (PDOException $exception){
    // Corregido getmessage() a getMessage()
    echo "The connection failed. ", $exception->getMessage();
 }
 
 $connection = null;
?>