<?php
$server = "localhost";
$user = "root";
$passwd = "";

try {
    // Conexión a la base de datos 'Library' que creamos antes
    $connection = new PDO("mysql:host=$server;dbname=Library", $user, $passwd);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 1. Preparamos la sentencia INSERT acorde a tu tabla existente (book_id, title, author)
    // Nota: Aunque definas ISBN y Publisher abajo, no podemos insertarlos si la tabla no tiene esas columnas.
    $sql = "INSERT INTO books (book_id, title, author) VALUES (:book_id, :title, :author)";
    
    $statement = $connection->prepare($sql);

    // 2. Vinculamos los parámetros (Lo que faltaba al inicio de tu código)
    $statement->bindParam(':book_id', $bookid);
    $statement->bindParam(':title', $title);
    $statement->bindParam(':author', $author);

    // --- PRIMER LIBRO ---
    $bookid = 961;
    // Corregidas las comillas “ ” por " "
    $isbn = "978-0099435488"; 
    $title = "Wilt";
    $author = "Tom Sharpe";
    $publisher = "Arrow Books, Limited";

    $statement->execute();

    // --- SEGUNDO LIBRO ---
    $bookid = 894;
    // Corregidas las comillas “ ” por " "
    $isbn = "978-0751552188";
    $title = "A Place to Call Home";
    $author = "Carole Matthews";
    $publisher = "Little, Brown Book Group";
    
    $statement->execute();

    echo "Datos insertados correctamente.";
}

catch (PDOException $exception){
    // Corregido getmessage() a getMessage()
    echo "The connection failed. ", $exception->getMessage();
}

$connection = null;
?>