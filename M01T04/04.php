<?php

// Número del 1 al 100, par o impar

for ($i = 1; $i <= 100; $i++) {
    $type = $i % 2 == 0 ? 'par' : 'impar';
    echo "$i es $type <br>";
}