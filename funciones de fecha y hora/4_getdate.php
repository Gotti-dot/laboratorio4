<?php

// Usando getdate()
$infoFecha = getdate();
echo "<br>Detalles de la fecha actual:<br>";
echo "Año: " . $infoFecha['year'] . "<br>";
echo "Mes: " . $infoFecha['mon'] . "<br>";
echo "Día: " . $infoFecha['mday'] . "<br>";
echo "Hora: " . $infoFecha['hours'] . "<br>";
echo "Minutos: " . $infoFecha['minutes'] . "<br>";
echo "Segundos: " . $infoFecha['seconds'] . "<br>";

?>