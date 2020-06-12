<?php

// Letras abecedario

$names = ['Roberto', 'Ricardo', 'René', 'Carlos', 'Tony', 'Carmen', 'Ana', 'Diego'];
$initials = [];
$abc = [
    'A', 'B', 'C', 'D',
    'E', 'F', 'G', 'H',
    'I', 'J', 'K', 'L',
    'M', 'N', 'O', 'P',
    'Q', 'R', 'S', 'T',
    'U', 'V', 'W', 'X',
    'Y', 'Z'
];

for ($i = 0; $i < count($names); $i++) {
    $initial = substr($names[$i], 0, 1);
    
    if (!in_array($initial, $initials)) {
        $initials[] = $initial;
    }
}

$notIncluded = array_diff($abc, $initials);

echo "Estas son las letras que no tienen nombres correspondientes: " . implode (', ', $notIncluded);