<?php

// años bisiestos en un rango de años

$start = 2020;
$end = 2040;

for ($i = $start; $i <= $end; $i++) {
    if ($i % 4 == 0 || $i % 400 == 0) {
        echo "$i es un año bisiesto<br>";
    }
}