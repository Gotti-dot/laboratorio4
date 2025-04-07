<?php
function obtenerFechaHora() {
    return [
        "fecha" => date("d-m-Y"),
        "hora" => date("H:i:s")
    ];
}
print_r(obtenerFechaHora());
?>