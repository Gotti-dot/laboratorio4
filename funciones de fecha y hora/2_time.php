<?php

// Usando time()
$timestamp = time();
echo "Timestamp actual (segundos desde el 1/01/1970): "
. $timestamp . "<br>";
echo "Fecha y hora a partir de timestamp: " 
. date("d-m-Y H:i:s", $timestamp) . "<br><br>";

?>