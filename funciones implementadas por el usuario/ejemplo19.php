<?php
function sumaProducto($a, $b) {
    return [
        "suma" => $a + $b,
        "producto" => $a * $b
    ];
}
print_r(sumaProducto(3, 5));
?>