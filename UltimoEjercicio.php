<?php
//INDEXADO

$alumnos =  array (
    array("Fernández Gil", "María", 5, 10, 6),
    array("López Martínez", "Javier", 8, 9, 5),
    array("García Sánchez", "Laura", 10, 10, 10),
    array("Rodríguez Pérez", "Alejandro",7 ,4 , 10),
    array("Díaz Morales", "Ana", 8, 6, 8),
    array("Torres Ruiz", "David", 7, 8, 6),
    array("Jiménez Romero", "Carmen", 9, 8, 7),
    array("Hernández Gómez", "Pablo", 10 , 6, 4),
    array("Sánchez Navarro", "Isabel", 7, 10, 8, 6)
);

function cambiar_nombre($apellidos, $nombre){
    return $nombre . " " . $apellidos;
}

function nota_total($proyecto, $actividades, $examen){
    return ($proyecto * 0.30) + ($actividades * 0.15) + ($examen * 0.50);
}

function mostrar($alumnos){
    echo "<table> <caption> Notas Finales </caption>";
    echo "<tr> <th> Estudiante </th>  <th> Proyecto </th>  <th> Actividades </th>  <th> Examen </th>  <th> Nota </th></tr>";

    foreach($alumnos as $estudiante){

        $apellidos = $estudiante[0];
        $nombre = $estudiante[1];
        $proyecto = $estudiante[2];
        $actividades = $estudiante[3];
        $examen = $estudiante[4];

        $nombre_completo = cambiar_nombre($apellidos, $nombre);

        $nota = nota_total($proyecto, $actividades, $examen);

        echo "<tr>";
        echo "<td>", $nombre_completo, "</td>";
        echo "<td>", $proyecto, "</td>";
        echo "<td>", $actividades, "</td>";
        echo "<td>", $examen, "</td>";
        echo "<td>", $nota, "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

mostrar($alumnos);
?>