<?php

// libros

$books = [ 'Libro A', 'Libro B', 'Libro C', 'Libro D', 'Libro E', 'Libro F', 'Libro G', 'Libro H' ];

$reading = [];
$notReading = [];

for ($i = 0; $i < count($books); $i++) {
    if (rand(0, 1) == 0) {
        $reading[] = $books[$i];
    } else {
        $notReading[] = $books[$i];
    }
}

echo "Los libros que leeré son: " . implode(', ', $reading) . "<br>";
echo "Los libros que NO leeré son: " . implode(', ', $notReading);