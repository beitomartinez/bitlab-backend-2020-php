<?php

$isNew = false;
$isWeekend = true;
$isWearingHat = true;
$price = 88.54;
$discountPrice = $price; // Variable para alterar precio original
$discount = 0; // Totaliza todos los descuentos aplicados
$category = 'electrodomesticos';

if ($isNew) {
    echo 'El precio del producto es de $' . number_format($price, 2) . '<br>';
    echo 'El descuento es de $' . number_format($discount, 2) . '<br>'; //0.00
    echo 'El total a pagar es de $' . number_format($price, 2);
} else {
    if ($isWeekend) {
        echo 'El precio del producto es de $' . number_format($price, 2) . '<br>';
        echo 'El descuento es de $' . number_format($price * 0.1, 2) . '<br>';
        echo 'El total a pagar es de $' . number_format($price * 0.9, 2);
    } else {
        // Evaluación del sombrero
        if ($isWearingHat) {
            $discountPrice -= 5;
            $discount = 5;
        }

        // Evaluación de precio mayor a 100
        if ($discountPrice > 100) {
            $discount += $discountPrice * 0.03;
        }

        // Evaluación categoría auto estéreo
        if ($category == 'auto estéreo' && $discountPrice < 100) {
            $discount += $discountPrice * 0.05;
        }

        echo 'El precio del producto es de $' . number_format($price, 2) . '<br>';
        echo 'El descuento es de $' . number_format($discount, 2) . '<br>';
        echo 'El total a pagar es de $' . number_format($price - $discount, 2);
    }
}