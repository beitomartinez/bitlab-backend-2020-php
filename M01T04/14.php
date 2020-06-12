<?php

// ESP > MURCIELAGO

$message = "h967 5st1d47nt5s d56 312s9 d5 b4t67b";
$batCode = ['m', 'u', 'r', 'c', 'i', 'e', 'l', 'a', 'g', 'o'];

for ($i = 0; $i < strlen($message); $i++) {
    for ($j = 0; $j < count($batCode); $j++) {
        if ($message[$i] == (string)$j) {
            $message[$i] = $batCode[$j];
        }
    }
}

echo $message;