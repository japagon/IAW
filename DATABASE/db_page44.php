<?php
// 1. CONFIGURACIÓN
// Base de datos que se ve en tus imágenes: 'Library'
$dsn = "mysql:host=localhost;dbname=Library"; 
$user = "root";
$password = ""; // Si tu contraseña es vacía, déjala así.

// El DNI que buscamos:
$dni_buscado = '78945632D';

try {
    // 2. CONECTAR
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 3. LA PREGUNTA (SQL)
    // Le decimos a la base de datos que:
    // a) Busque el TÍTULO y AUTOR de la tabla 'books' (b)
    // b) Uniendo 'readers' (r) con 'lendings' (l) y 'books' (b)
    // c) SOLO donde el DNI sea el que buscamos.
    $sql = "
    SELECT
        b.title, 
        b.author,
        l.lend_date
    FROM
        readers r
    JOIN
        lendings l ON r.reader_id = l.read_id 
    JOIN
        books b ON l.book_id = b.book_id
    WHERE
        r.DNI = ?
    ";

    // Preparamos la pregunta y le damos el DNI
    $statement = $connection->prepare($sql);
    $statement->bindParam(1, $dni_buscado);
    $statement->execute();

    // 4. MOSTRAR RESULTADOS

    echo "<h1>Libros que tiene prestados el lector con DNI: " $dni_buscado  "</h1>";
    echo "<table>";
    echo "<tr><th>Título del Libro</th><th>Autor</th><th>Fecha Préstamo</th></tr>";

    $encontrados = false;
    while ($tuple = $statement->fetch(PDO::FETCH_ASSOC)){
        $encontrados = true;
        echo "<tr>";
        echo "<td>", $tuple['title'] , "</td>";
        echo "<td>", $tuple['author'] , "</td>";
        echo "<td>", $tuple['lend_date'] , "</td>";
        echo "</tr>";
    }
    
    if (!$encontrados) {
        echo "<tr><td>Este lector no tiene libros prestados.</td></tr>";
    }
    
    echo "</table>";

}
catch (PDOException $exception){
    // Si algo falla al conectar o al preguntar
    echo "¡ERROR! Algo salió mal: ", $exception->getMessage();
}

// 5. CERRAR CONEXIÓN
$connection = null;
?>