<?php
// Ejemplo de trim()
$cadenaConEspacios = "   Hola mundo   ";
$cadenaSinEspacios = trim($cadenaConEspacios);
echo "Resultado con trim(): '$cadenaSinEspacios'\n";
echo "<br>";
// Ejemplo de chop() 
$cadenaConEspaciosDerecha = "Hola mundo   ";
$cadenaSinEspaciosDerecha = chop($cadenaConEspaciosDerecha); // Elimina solo los espacios al final
echo "Resultado con chop(): '$cadenaSinEspaciosDerecha'\n";
?>