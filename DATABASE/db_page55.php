<?php
$dsn = "mysql:host=localhost;dbname=Library";
$user = "root";
$password = "";

try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT Title, Author FROM books ORDER BY Title";
    $statement = $connection->prepare($sql);
    $statement->execute();

    $books = $statement->fetchAll();

    echo "<ul>";
    foreach ($books as $book) {
        echo "<li>" . $book['Title'] . " - " . $book['Author'] . "</li>";
    }
    echo "</ul>";

} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

$connection = null;
?>
