<?php

$year = 2001;

// Solución A
if ($year % 4 == 0) {
    if ($year % 100 == 0) {
        if ($year % 400 == 0) {
            echo 'El año ingresado es bisiesto.';
        } else {
            echo 'El año ingresado NO es bisiesto.';
        }
    } else {
        echo 'El año ingresado es bisiesto.';
    }
} else {
    echo 'El año ingresado NO es bisiesto.';
}

// Solución B

if ($year % 4 == 0 || $year % 400 == 0) {
    echo 'El año ingresado es bisiesto.';
} else {
    echo 'El año ingresado NO es bisiesto.';
}
