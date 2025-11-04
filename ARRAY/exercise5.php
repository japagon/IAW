<?php
$matrizA = array(
    array(8, 3, 20, 8, 68),
    array(10, 7, 9, 14, 21),
    array(18, 13, 16, 13, 14),
    array(1, 71, 19, 4, 31),
    array(16, 13, 3, 17, 25)
);

function transpuesta($matriz) {
    $transpuesta = array();
    for ($fila = 0; $fila < count($matriz); $fila++) {
        for ($columna = 0; $columna < count($matriz[$fila]); $columna++) {
            $transpuesta[$columna][$fila] = $matriz[$fila][$columna];
        }
    }
    return $transpuesta;
}

function sum_matrices($matriz1, $matriz2) {
    $resultado = array();
    for ($fila = 0; $fila < count($matriz1); $fila++) {
        for ($columna = 0; $columna < count($matriz1[$fila]); $columna++) {
            $resultado[$fila][$columna] = $matriz1[$fila][$columna] + $matriz2[$fila][$columna];
        }
    }
    return $resultado;
}

function display_matrix($matriz) {
    echo "<table>";
    for ($fila = 0; $fila < count($matriz); $fila++) {
        echo "<tr>";
        for ($columna = 0; $columna < count($matriz[$fila]); $columna++) {
            echo "<td>" . $matriz[$fila][$columna] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

$transposed = transpuesta($matrizA);
$suma = sum_matrices($matrizA, $transposed);

echo "<h3>Matriz Original:</h3>";
display_matrix($matrizA);

echo "<h3>Matriz Transpuesta:</h3>";
display_matrix($transposed);

echo "<h3>Suma de ambas matrices:</h3>";
display_matrix($suma);
?>
