<?php

// Caracteres en índices pares e impares

$array = str_split('PALABRAS');
$evenChars = ''; // pares
$oddChars = ''; // impares

for ($i = 0; $i < count($array); $i++) {
    if ($i % 2 == 0) { // es par
        $evenChars .= $array[$i];
    } else { // es impar
        $oddChars .= $array[$i];
    }
}

echo "Caracteres pares: $evenChars<br>";
echo "Caracteres impares: $oddChars<br>";