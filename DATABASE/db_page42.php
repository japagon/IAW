<?php
 $dsn = "mysql:host=localhost;dbname=Library";
 $user = "root";
 $password = "";

try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM books WHERE Publisher = ? ORDER BY Title";
    $statement = $connection->prepare($sql);

    $publisher = "Arrow Books, Limited";
    $statement->bindParam(1, $publisher);

    $statement->execute();

    echo "<table>";
    echo "<caption>Books published by $publisher</caption>";
    echo "<tr>
            <th>ISB</th>
            <th>Title</th>
            <th>Author</th>
            <th>Gender</th>
            <th>Publisher</th>
          </tr>";

    while ($tuple = $statement->fetch()) {
        echo "<tr>";
        echo "<td>" . $tuple['ISB'] . "</td>";
        echo "<td>" . $tuple['Name'] . "</td>";
        echo "<td>" . $tuple['Author'] . "</td>";
        echo "<td>" . $tuple['Gender'] . "</td>";
        echo "<td>" . $tuple['Publisher'] . "</td>";
        echo "</tr>";
    }

     echo "</table>";
}
    catch (PDOException $e) {
        echo "Connection error: " . $e->getMessage();


    $connection = null;
}

?>