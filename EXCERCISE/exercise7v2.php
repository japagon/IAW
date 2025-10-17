<?php
# 7. Given three numbers, deliver an output in which they appear ordered from the biggest to the
# smallest.

# Dame 3 numeros, en el que se muestren ordenados del mas grande al mas pequeño

$num_1 = 10;
$num_2 = 13;
$num_3 = 8;

$nums = array($num_1, $num_2, $num_3); #array genera una lista de las tres variables en una sola $nums

rsort($nums); #Se encarga de generar el orden de mayor a menor

echo "Los numeros ordenados son: " . implode(", ", $nums); 
#El "." concatena es decir une cadenas
# implode se encarga de convertir la liste " $num " en una cadena de texto

?>

<br>

<?php
# 7. Given three numbers, deliver an output in which they appear ordered from the biggest to the
# smallest.

# Dame 3 numeros, en el que se muestren ordenados del mas grande al mas pequeño

$num_1 = 10;
$num_2 = 13;
$num_3 = 8;

$nums = array($num_1, $num_2, $num_3); #array genera una lista de las tres variables en una sola $nums

sort($nums); #Se encarga de generar el orden de menor a mayor

echo "Los numeros ordenados son: " . implode(", ", $nums); 
#El "." concatena es decir une cadenas
# implode se encarga de convertir la liste " $num " en una cadena de texto

?>
