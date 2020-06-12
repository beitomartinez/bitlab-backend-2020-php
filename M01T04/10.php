<?php

// Contar edades

$answers = [20, 21, 5, 23, 12, 99, 98, 97, 64, 5, 24, 55, 5, 77, 19, 20, 21, 20];
$arrAges = [];
$ages = [];

for ($i = 0; $i < count($answers); $i++) {
    if (isset($arrAges[$answers[$i]])) {
        $arrAges[$answers[$i]]++;
    } else {
        $arrAges[$answers[$i]] = 1;
    }

    if (!in_array($answers[$i], $ages)) {
        $ages[] = $answers[$i];
    }
}

for ($i = 0; $i < count($ages); $i++) {
    echo "Encontramos {$arrAges[$ages[$i]]} personas de $ages[$i] años de edad<br>";
}

