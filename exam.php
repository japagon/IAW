<?php
// Javier Padial González


// Traduction.

// Para solucionar este primero 
// En una escuela de ingles, los estudiantes pueden matricularse en uno o dos niveles diferentes y elegir uno de los tres profesores.

// El numero de estudiantes en cada nivel por cada profesor sera recordado.

// Escribe un script para mostrar una tabla mostrando el maximo numeros de estudiantes en clase por cada nivel con su profesor correspondiente.
// Por cada profesor, solo apareceran sus iniciales, seran escritas como en este ejemplo: "Andres Muñoz Rodriguez", "MRA" debe de aparecer.

// Debe de haber un array con estudiantes (5), tienen que tener los niveles en el array.
// Debe de haber un array con (3) profesores.

// Crear una tabla que muestre el numero de estudiantes por nivel con su profesor es decir:
// NumeroEstudiantes    Nivel   Profesor
//  3                   1       Andres Muñoz Rodriguez.
//  2                   2       Leticia Marin Sanchez

$estudiantes = array(
                    array("nameStudent" => "Mario Lopez Castillo",      "level" => "Nivel1"),
                    array("nameStudent" => "Carlos González Carrillo",  "level" => "Nivel2"),
                    array("nameStudent" => "David Ortiz Sierra",        "level" => "Nivel2"),
                    array("nameStudent" => "Javier Padial González",    "level" => "Nivel1"),
                    array("nameStudent" => "Carlos Ruiz Sanchez",       "level" => "Nivel1")
);


// Son dos profesores por que hay dos niveles.
$profesores = array( 
                    array("nameTeacher" => "Andres Muñoz Rofríguez",    "level" => "1"),
                    array("nameTeacher" => "Leticia Marin Sanchez",     "level" => "2")

);

// Funcion que invierta el nombre del profesor.


// Funcion que cuente los estudiantes por nivel.

function numeroEstudiantes($estudiantes){
    
    foreach($estudiantes as $nombre => $nivel){

        if($nivel = "Nivel1"){

            echo count($nivel);

        } elseif ($nivel = "Nivel2"){

            echo count($nivel);

        } else {
            echo "  ";
        }
        
    }
}

echo "<table>";

echo "<tr> <th> Numero_Estudiantes </th>  <th> Nivel </th>  <th> Profesor </th> </tr>";

foreach($estudiantes as $nombre => $nivel){

    echo "<tr>";

    echo "<td>", numeroEstudiantes($nivel), "</td>";

    echo "<td>";
    echo $estudiantes[$nivel];
    echo "</td>";

    echo "<td>";
    echo $profesores("nameTeacher");
    echo "</td>";

    echo "</tr>";
}

echo "</table>";



?>