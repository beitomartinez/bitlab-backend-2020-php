<?php

// Invertir string

$string = "PALABRA";
$array = str_split($string);

$array = array_reverse($array);

$output = '';
for ($i = 0; $i < count($array); $i++) {
    $output .= $array[$i];
}

echo $output;