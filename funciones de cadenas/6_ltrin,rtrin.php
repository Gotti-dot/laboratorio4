<?php
// Ejemplo de ltrim()
$cadenaConEspacios = "   Hola mundo";
$cadenaSinEspaciosIzquierda = ltrim($cadenaConEspacios);
echo "Resultado con ltrim(): '$cadenaSinEspaciosIzquierda'\n";
echo "<br>";
// Ejemplo de rtrim()
$cadenaConEspaciosDerecha = "Hola mundo   ";
$cadenaSinEspaciosDerecha = rtrim($cadenaConEspaciosDerecha);
echo "Resultado con rtrim(): '$cadenaSinEspaciosDerecha'\n";
?>