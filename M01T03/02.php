<?php

$a = 100;
$b = 60;
$c = 60;

// Solución A
if ($a + $b + $c == 180) {
    echo 'La suma de los ángulos es válida';
} else {
    echo 'La suma de los ángulos no es válida';
}

// Solución B
$result = 'sí';

if ($a + $b + $c != 180) {
    $result = 'no';
}

echo "La suma de los ángulos $result es válida.";