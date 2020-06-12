<?php

// Ovejitas

$max = rand(21, 34);

for ($i = 1; $i <= $max; $i++) {
    if ($i == 1) {
        echo '1 ovejita<br>';
    } else {
        echo "$i ovejitas<br>";
    }

    // echo "$i ovejita" . ( $i == 1 ? '' : 's' ) .  "<br>";
}