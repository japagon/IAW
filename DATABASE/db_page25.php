<?php
$server = "localhost";
$user = "root";
$passwd = "";

try {
    // 1. Faltaba una coma y el nombre de variable era $passwd, no $password
    $connection = new PDO("mysql:host=$server", $user, $passwd); 
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "CREATE DATABASE IF NOT EXISTS Library";
    $connection->query($sql);
    
    // 2. Faltaba el punto y coma final
    $connection->query("USE Library");

    // Eliminé la línea repetida $connection->query($sql) que intentaba crear la DB de nuevo.

    $sql = "CREATE TABLE books(
        book_id         INT AUTO_INCREMENT PRIMARY KEY,
        title           VARCHAR(100),
        author          VARCHAR(100)
    )";
    $connection->query($sql);

    $sql = "CREATE TABLE readers(
        reader_id       INT AUTO_INCREMENT PRIMARY KEY,
        name_reader     VARCHAR(100),
        phone           VARCHAR(100)
    )";   
    $connection->query($sql);

    $sql = "CREATE TABLE lendings(
        lend_id         INT AUTO_INCREMENT PRIMARY KEY,
        book_id         INT,
        read_id         INT,
        lend_date       DATE,
        returning_date  DATE,
        FOREIGN KEY (book_id) REFERENCES books (book_id),
        FOREIGN KEY (read_id) REFERENCES readers (reader_id)
    )";
    $connection->query($sql);

    // 3. Corregido el conflicto de comillas (usar simples ' dentro de dobles ") 
    // y la sintaxis de cierre.
    $sql = "INSERT INTO books (title, author) VALUES
        ('Wilt', 'Arrow Books'),
        ('1984', 'George Orwell'),
        ('El Quijote', 'Cervantes')";
    $connection->query($sql);

    // 4. Eliminado 'reader_id' de las columnas (es automático) para que coincida con los 2 valores.
    $sql = "INSERT INTO readers (name_reader, phone) VALUES
        ('Juan Perez', '675654345'),
        ('Jose Carlos', '692845135'),
        ('Paco Gerte', '645234123')";
    $connection->query($sql);

    // 5. Agregado 'returning_date' a las columnas porque estabas insertando 4 valores.
    $sql = "INSERT INTO lendings (book_id, read_id, lend_date, returning_date) VALUES
        (1, 1, '2021-10-11', '2021-11-07'),
        (2, 2, '2022-05-10', '2022-06-21'),
        (3, 3, '2024-12-07', '2024-01-23')";
    $connection->query($sql);

    echo "Library database has been created successfully";

} 
// 6. Corregido el nombre de la clase (PDOException) y el método (getMessage())
catch (PDOException $exception){
    echo "The connection failed: " . $exception->getMessage();
}

$connection = null;
?>