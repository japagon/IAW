<?php
#   for ($x=0; $x <= 10; $x++) 
#   {
#       echo $x, " ";
#   }
# ?> 


<?php # Abrimos el bloque PHP
  for ($x=0; $x <= 10; $x++) # Empezamos un bucle e incia $x = 0 para que lo repita mientras que $x sea menor que 10 que le sume uno
  {
      if ($x < 10) { # Comprobamos que $x sea menor que 10 
          echo $x . " "; # Muestra en pantalla el valor de $x y despues añade un espacio (El . sirve para poder unir el numero al espacio)
      } else { # Si la condicion no se cumple (es decir cuando $x es 10)
          echo $x; # Muestra el valor de $x sin añadir un espacio al final
      }
  }
?>