<?php

// mcm

$a = 11;
$b = 28;
$mcm = ($a > $b) ? $a : $b;

while ($mcm % $a != 0 || $mcm % $b != 0) {
    $mcm++;
}

echo "El mcm de $a y $b es $mcm";