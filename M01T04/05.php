<?php

// Tabla de división del 2

for ($i = 25; $i >= 0; $i--) {
    echo "$i entre 2 es igual a " . floor($i / 2) . " y me sobra " . $i % 2 .  "<br>";
}