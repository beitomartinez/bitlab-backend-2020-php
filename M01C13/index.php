<?php

function makeCoffee($type = 'Capuccino') {
    echo "Haré una taza de $type<br>";
}

$myType = 'Mocca';

// makeCoffee();
// makeCoffee($myType);
// makeCoffee('Café con leche');

function makeIcecream (string $type = null) {
    echo "Haré un helado de $type<br>";
}

// makeIcecream(null);

function multiply(int $x, int $y) {
    echo "$x x $y = " . $x * $y;
}

function iterate (array $arr) {
    foreach ($arr as $k => $item) {
        echo "El valor en el índice $k es $item<br>";
    }
}

// iterate([ 'name' => 'Jorge', 'age' => 22, 'city' => 'San Salvador' ]);


function findRandomNumber($min, $max) {
    return rand($min, $max);
    echo 'sdkhjfgsdkfjhlfjshlkfdjhdksl';
    return '000000000';
}

$myRandomNumber = findRandomNumber(1, 10);
// echo "Mi número random es $myRandomNumber";


function findRandomNumbers($min, $max, $total) {
    $output = [];
    for ($i = 0; $i < $total; $i++) {
        $output[] = rand($min, $max);
    }

    return $output;
}

// echo "Mis números aleatorios son : " . implode(', ', findRandomNumbers(1, 10, 10));

// $myFunction = 'makeIcecream';
// $myFunction('chocolate con maní');

$random = rand(0,1);
$myFunction = '';
$flavor = '';

if ($random == 0) {
    $myFunction = 'makeIcecream';
    $flavor = 'chocolate con chispas de dulces';
} else {
    $myFunction = 'makeCoffee';
    $flavor = 'americano';
}

// $myFunction($flavor);

$cantidad = '20';
$fruta = 'manzanas';

$example = function ($cuando) use (&$cantidad, &$fruta) {
    echo "$cuando me comí $cantidad $fruta";
};

// $example('Ayer');

$fruta = 'peras';
$cantidad = '12';
// $example('Hoy');


$f = fn($x) => $x * $x;
// echo $f(2);

$f1 = fn($y) => "Hola, $y";
// echo $f1('Juan');

$f2 = fn($a, $b) => ($a > $b) ? $a : $b;

$i = 60;
$j = 7;
// echo "Entre $i y $j, el mayor es " . $f2($i, $j);


try {
    echo 'A';

    // AQUI DA ERROR

    echo 'ZZ';
} catch (Exception $e) {
    echo 'A1';
} finally {
    echo 'B';
}


echo 'C';