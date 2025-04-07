<?php
// Usando checkdate()
$mes = 2;
$dia = 29;
$año = 2024; // Año bisiesto
if (checkdate($mes, $dia, $año)) {
    echo "La fecha $dia/$mes/$año es válida.<br>";
} else {
    echo "La fecha $dia/$mes/$año no es válida.<br>";
}
?>