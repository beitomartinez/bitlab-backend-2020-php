<?php

// Alfabeto minúscula y mayúscula

$abc = [
    'A', 'B', 'C', 'D',
    'E', 'F', 'G', 'H',
    'I', 'J', 'K', 'L',
    'M', 'N', 'O', 'P',
    'Q', 'R', 'S', 'T',
    'U', 'V', 'W', 'X',
    'Y', 'Z'
];

for ($i = 0; $i < count($abc); $i++) {
    echo strtolower($abc[$i]) . " {$abc[$i]} <br>";
}