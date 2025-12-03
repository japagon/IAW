<!DOCTYPE html>
<html lang=”en”>

 <head>
 <title>Ejercicio 3</title>
 </head>

 <body>

<?php


$name = $_POST['name'];
$roles = $_POST['roles'];
$mail = $_POST['mail'];

echo "<div>Hello your name is: ", $name,  "</div>";
echo "<div> Your email are: ", $mail, "</div>";

echo "Your role are: ";

foreach($roles as $role){
    echo $role, ", ";
}

?>
 
 </body>

</html>