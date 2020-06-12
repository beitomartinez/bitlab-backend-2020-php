<?php

// Suma de digitos de un entero

$arrIntegers = str_split(87650000000000);
$sum = 0;

for ($i = 0; $i < count($arrIntegers); $i++) {
    $sum += $arrIntegers[$i];
}

echo "El total de la suma de los dígitos es: $sum";