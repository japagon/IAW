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

if (empty($name)){
    echo "Debes de introducir el nombre";
} elseif (empty($mail)){
    echo "Debes de introducir el mail";
} else {
    echo "<div> Your name is ,", $name, "and your mail: ", $mail, "</div>";
    echo "Your role are: ";
}



foreach($roles as $role){
    echo $role . ", ";
}

?>
 
 </body>

</html>