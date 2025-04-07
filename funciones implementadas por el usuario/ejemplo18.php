<?php
function maxMinArray($array) {
    return [
        "max" => max($array),
        "min" => min($array)
    ];
}
print_r(maxMinArray([1, 2, 3, 4, 5]));
?>