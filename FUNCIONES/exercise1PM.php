<?php

// Aqui definimos  una funcion a la que llamamos greeting 
// $name es un parametro opcional para que cuando no tengo nada se ponga "guy"

function greeting($name = "guy"){
    echo "<div>Nice to meet you: ", $name, "</div>";
}

// Aqui estamos ejecutando la funcion
greeting("Daniel");
greeting("Patricia");
greeting();
greeting("Jose Carlos");

?>