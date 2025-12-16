<?php
 $dsn = "mysql:host=localhost;dbname=YourStore";
 $user = "root";
 $password = "";
 try {
 $connection = new PDO($dsn, $user, $password);
 $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "SELECT * FROM customers WHERE City = ? ORDER BY Name";
 $statement = $connection->prepare($sql);
 $statement->bindParam(1, $city);
 $city = 'Londres';
 $statement->execute();
 echo "<table><caption>Customers in “, $city, “</caption>";
 echo "<tr> <th>ID</th> <th>NAME</th> <th>CONTACT</th> <th>POSITION</th> <th>TELEPHONE</th>
</tr>";
while ($tuple = $statement->fetch()){
 echo "<tr>";
 echo "<td>",$tuple['CustomerId'] , "</td>";
 echo "<td>",$tuple['Name'] , "</td>";
 echo "<td>",$tuple['Contact'] , "</td>";
 echo "<td>",$tuple['Position'] , "</td>";
 echo "<td>",$tuple['Telephone'] , "</td>";
 echo "</tr>";
}
 echo "</table>";
 }
 catch (PDOException $exception){
 echo "The connection failed. ", $exception->getmessage();
 }
 $connection = null;
?>