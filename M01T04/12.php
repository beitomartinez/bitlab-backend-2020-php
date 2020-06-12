<?php

// Promedio

$grades = [4, 5, 6, 3, 4, 2.5, 11, 766, 10, 67, 34.55, 23.9999999, 8.0001, 22];
$sum = 0;

for ($i = 0; $i < count($grades); $i++) {
    $sum += $grades[$i];
}

echo "El promedio es: " . number_format($sum / count($grades), 2);