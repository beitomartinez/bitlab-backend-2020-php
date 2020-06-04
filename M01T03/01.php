<?php

$a = 5;
$b = 2;
$c = 3;

// Solución A
if ($a > $b && $a > $c) {
    echo "El número meas grande es: $a";
}

if ($b > $a && $b > $c) {
    echo "El número meas grande es: $b";
}

if ($c > $a && $c > $b) {
    echo "El número meas grande es: $c";
}

// Solución B

if ($a > $b) {
    if ($a > $c) {
        echo "El número meas grande es: $a";
    } else {
        echo "El número meas grande es: $c";
    }
} else { // $b es mayor que $a
    if ($b > $c) {
        echo "El número meas grande es: $b";
    } else { // $c es mayor $b
        echo "El número meas grande es: $c";
    }
}