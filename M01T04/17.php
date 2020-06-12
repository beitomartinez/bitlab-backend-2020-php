<?php

// Números primos entre 1 y un número dado

$number = 80;

for ($i = 1; $i <= $number; $i++) { // iteración entre 1 y el número
    $isPrime = true;
    for ($j = 2; $j < $i; $j++) { // iteración entre 2 y el número de la iteración actual
        if ($i % $j == 0) {
            $isPrime = false;
        }
    }
    
    if ($isPrime) {
        echo "El número $i es primo<br>";
    }
}