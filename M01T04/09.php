<?php

// Contar Sí y No

$answers = ['Sí', 'No', 'No', 'Sí', 'No', 'No', 'Sí', 'No', 'No', 'Sí', 'Sí'];
$yes = 0;
$no = 0;
$totalAnswers = count($answers);

for ($i = 0; $i < $totalAnswers; $i++) {
    if ($answers[$i] == 'Sí') {
        $yes++;
    } else {
        $no++;
    }
}

echo "El total de respuestas es: $totalAnswers<br>";

echo "La frecuencia de respuestas Sí es: $yes<br>";
echo "El porcentaje de respuestas Sí es: " . number_format($yes /$totalAnswers, 2) . "%<br>";
echo "La frecuencia de respuestas No es: $no<br>";
echo "El porcentaje de respuestas No es: " . number_format($no /$totalAnswers, 2) . "%<br>";

