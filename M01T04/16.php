<?php

// Números primos

$number = 111;
$isPrime = true;

for ($i = 2; $i < $number; $i++) {
    if ($number % $i == 0) {
        $isPrime = false;
    }
}

echo "El número $number " . ($isPrime ? '' : 'no') . ' es primo';