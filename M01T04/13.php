<?php

// ESP > MURCIELAGO

$message = "hola estudiantes del curso de bitlab";
$batCode = ['m', 'u', 'r', 'c', 'i', 'e', 'l', 'a', 'g', 'o'];

for ($i = 0; $i < strlen($message); $i++) {
    for ($j = 0; $j < count($batCode); $j++) {
        if (strtolower($message[$i]) == $batCode[$j]) {
            $message[$i] = $j;
        }
    }
}

echo $message;