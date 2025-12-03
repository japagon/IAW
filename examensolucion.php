<?php
// Javier Padial González

$estudiantes = array(
    array("nameStudent" => "Mario Lopez Castillo",     "level" => "Nivel1"),
    array("nameStudent" => "Carlos González Carrillo", "level" => "Nivel2"),
    array("nameStudent" => "David Ortiz Sierra",       "level" => "Nivel2"),
    array("nameStudent" => "Javier Padial González",   "level" => "Nivel1"),
    array("nameStudent" => "Carlos Ruiz Sanchez",      "level" => "Nivel1")
);

$profesores = array( 
    array("nameTeacher" => "Andres Muñoz Rodríguez", "level" => "Nivel1"),
    array("nameTeacher" => "Leticia Marin Sanchez",   "level" => "Nivel2")
);

// Contar estudiantes por nivel (sin isset)
$contador = array("Nivel1" => 0, "Nivel2" => 0);

foreach($estudiantes as $alumno){
    $nivel = $alumno["level"];
    $contador[$nivel] = $contador[$nivel] + 1;
}

echo "<table>";
echo "<tr><th>Número de Estudiantes</th><th>Nivel</th><th>Profesor (Iniciales)</th></tr>";

foreach($profesores as $profesor){
    $nivel = $profesor["level"];
    $nombre = $profesor["nameTeacher"];

    // Obtener iniciales
    $partes = explode(' ', $nombre);
    $iniciales = "";
    foreach($partes as $p){
        $iniciales .= strtoupper(substr($p, 0, 1));
    }

    echo "<tr>";
    echo "<td>" . $contador[$nivel] . "</td>";
    echo "<td>" . $nivel . "</td>";
    echo "<td>" . $iniciales . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
