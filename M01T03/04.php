<?php

$minutes = 185;

// Solución A
if ($minutes <= 100) {
    echo 'Total a pagar: $' . number_format($minutes * 0.45, 2);
} else {
    if ($minutes <= 200) {
        echo 'Total a pagar: $' . number_format($minutes * 0.4, 2);
    } else {
        if ($minutes <= 400) {
            echo 'Total a pagar: $' . number_format($minutes * 0.3 - 5, 2);
        } else {
            echo 'Total a pagar: $' . number_format($minutes * 0.27 - 10, 2);
        }
    }
}

// Solución B

$result = 'Total a apagar: $';

if ($minutes > 400) {
    $result .= number_format($minutes * 0.27 - 10, 2);
} else { // Menor o igual que 400
    if ($minutes > 200) {
        $result .= number_format($minutes * 0.3 - 5, 2);
    } else { // Menor o igual que 200
        if ($minutes > 100) {
            $result .= number_format($minutes * 0.4, 2);
        } else { // Menor o igual que 100
            $result .= number_format($minutes * 0.45, 2);
        }
    }
}

echo $result;