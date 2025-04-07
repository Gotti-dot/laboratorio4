<?php
function calcularCirculo($radio) {
    $area = pi() * $radio * $radio;
    $perimetro = 2 * pi() * $radio;
    return ["area" => $area, "perimetro" => $perimetro];
}
print_r(calcularCirculo(5));
?>