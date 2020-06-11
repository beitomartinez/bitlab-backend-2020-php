<?php

$a = 4;
$b = 9;

if ($a > $b) {
    echo "A ($a) es mayor que B ($b)";
}

if ($a * 3 > $b) {
    // echo "Tres veces A ($a) es mayor que B ($b)";
}

if (is_string($a)) {
    echo 'La variable A es un string';
}

$fruits = ['mango', 'pera', 'banana'];

if (in_array('pera', $fruits)) {
    // echo 'Las peras están en el array';
}


// ---------  ELSE


// if ($a > $b) {
//     echo "A ($a) es mayor que B ($b)";
// } else {
//     echo "B ($b) es mayor que A ($a)";
// }

// if ($a * 3 > $b) {
//     echo "Tres veces A ($a x 3 = " . $a * 3 .  ") es mayor que B ($b)";
// } else {
//     echo "Tres veces A ($a x 3 = " . $a * 3 .  ") NO es mayor que B ($b)";
// }

$isRegistered = false;

// if ($isRegistered) {
//     echo '¡Bienvenido de vuelta!';
// } else {
//     echo 'No te encontramos en nuestra base de datos';
// }

$balance = 99.88;

// if ($balance) {
//     echo 'Aún tienes dinero :D';
// } else {
//     echo 'Ya no tienes diner :(';
// }


// ---------  ELSE IF


$age = 75;

if ($age <= 12) {
    // echo 'Niño';
} elseif ($age <= 18) { // Mayor que 12 && <= 18
    // echo 'Adolescente';
} elseif ($age <= 65) { // Mayor que 18 && <= 65
    // echo 'Adulto';
} else { // Mayor que 65
    // echo 'Anciano';
}

$minutes = 344;
$bill = 0;

if ($minutes <= 100) {
    $bill = $minutes * 0.45;
} elseif ($minutes <= 200) {
    $bill = $minutes * 0.4;
} elseif ($minutes <= 300) {
    $bill = $minutes * 0.3 - 5;
} else {
    $bill = $minutes * 0.27 - 10;
}

// echo 'Total a pagar: $' . number_format($bill, 2);

$grade = 7.6;

if ($grade == 10) {
    // echo 'A';
} elseif ($grade >= 8) {
    // echo 'B';
} elseif ($grade >= 7) {
    // echo 'C';
} elseif ($grade >= 6) {
    // echo 'D';
} else {
    // echo 'F';
}

// ---------  SINTAXIS OPCIONALES

// Sintaxis opcional 1
// if (false) echo 'Esto!';
// else echo 'nope :(';

// Sintaxis opcional 2
// if (true):
//     echo 'Línea 1';
//     $a = $b++;
//     echo 'Esto!';
// elseif (false):
//     echo 'nope :(';
//     $a = $b--;
//     echo 'Esto!';
// else:
//     echo 'nope :(';
//     $a = $b--;
// endif;

// echo true ? 'Sí' : 'No';
// $x = ($a > $b) ? 'Greater' : 'Lesser';


// ---------  WHILE

$c = 1;
// while ($c <= 10) {
//     echo "$c x 2 = " . $c * 2 . '<br>';
//     $c++;
// }

$abc = ['a', 'b', 'c', 'd', 'e', 'f'];
$c = 0;

// while ($c < count($abc)) {
//     echo $abc[$c];
//     $c++;
// }

$money = 1200;
$friends = ['Juan', 'Pedro', 'Miguel', 'Ricardo', 'Roberto'];
$c = 0;

// while ($c < count($friends) && $money > 0) {
//     echo "Le daremos $20.00 a {$friends[$c]}<br>";
//     $money -= 20;
//     $c++;
// }



// ----------------------- DO WHILE

$c = 10;
// do {
//     if ($c < 10) {
//         echo "No hemos llegado a 10, vamos por $c<br>";
//     } else {
//         echo 'Ya llegamos a 10!';
//     }

//     $c++;
// } while ($c <= 10);

// ----------------------- FOR

// for ($i = 1; $i <= 10; $i++) {
//     echo "$i x 7 = " . $i * 7 . '<br>';
// }

$visitedCountries = [ // count = 4
    'Panamá', // 0
    'Guatemala', // 1
    'El Salvador', // 2
    'Nicaragua' // 3
];

// for ($c = 0; $c < count($visitedCountries); $c++) {
//     if ($visitedCountries[$c] != 'El Salvador') {
//         echo "He viajado a {$visitedCountries[$c]}<br>";
//     }
// }

$students = [
    ['Miguel', 22],
    ['Pedro', 17],
    ['Juan', 30],
    ['Roberto', 33],
    ['José', 18],
];

// for ($j = 0; $j < count($students); $j++) {
//     echo "{$students[$j][0]} tiene {$students[$j][1]} años.<br>";
// }

$musicGenres = [
    ['rock', 'metal', 'heavy metal', 'punk', 'industrial'],
    ['salsa', 'merengue', 'cumbia', 'bachata'],
    ['clasica', 'adulto contemporaneo'],
];

// for ($i = 0; $i < count($musicGenres); $i++) {
//     for ($j = 0; $j < count($musicGenres[$i]); $j++) {
//         echo "- {$musicGenres[$i][$j]}<br>";
//     }
// }

$students = [
    ['René', ['pizza', 'hamburguesas']],
    ['Carmen', ['pasta', 'wendys', 'papas', 'asados']],
    ['Diego', ['pupusas', 'tamales', 'tortas', 'pastelitos']],
    ['Ana', ['Clavo y Canela', 'San Martín', 'ensaladas', 'Cebollines']],
];

// for ($i = 0; $i < count($students); $i++) {
//     echo "Las comidas favoritas de {$students[$i][0]} son:<br>";
//     for ($j = 0; $j < count($students[$i][1]); $j++) {
//         echo "- {$students[$i][1][$j]} <br>";
//     }
//     echo '<hr>';
// }

$students = [
	[
		'name' => 'Juan',
		'foods' => ['pizza', 'hamburguesas'],
		'genres' => ['rock', 'salsa']
	],
	[
		'name' => 'Pedro',
		'foods' => ['tacos', 'pasta'],
		'genres' => ['rancheras', 'punk']
	],
	[
		'name' => 'Carmen',
		'foods' => ['tamales', 'tortas'],
		'genres' => ['ska', 'reggae']
	],
];

// for ($i = 0; $i < count($students); $i++) {
//     echo "Las comidas favoritas de {$students[$i]['name']} son:<br>";
//     for ($j = 0; $j < count($students[$i]['foods']); $j++) {
//         echo "- {$students[$i]['foods'][$j]} <br>";
//     }
//     echo '<br>';
    
//     echo "Los géneros musicales favoritos de {$students[$i]['name']} son:<br>";
//     for ($j = 0; $j < count($students[$i]['genres']); $j++) {
//         echo "- {$students[$i]['genres'][$j]} <br>";
//     }

//     echo '<hr>';
// }

// echo '<br><br><br><br><br><br>';
// echo "i vale $i <br>";
// echo "j vale $j <br>";


// ----------------------- FOREACH

$fruits = ['bananas', 'peras', 'sandías', 'uvas', 'fresas'];

// foreach ($fruits as $fruit) {
//     echo "Me gustan las $fruit <br>";
// }

// foreach ($fruits as $z => $item) {
//     echo "La fruta en la posición $z es $item<br>";
// }


$what = 'Roberto';
$names = ['José', 'Roberto', 'Carlos', 'Miguel', 'Pedro', 'Roberto'];

// foreach ($names as $name) {
//     if ($name == $what) {
//         echo '¡Lo encontré!<br>';
//     }
// }

// foreach ($names as $i => $name) {
//     if ($name == $what) {
//         echo "¡Lo encontré! Está en la posición $i<br>";
//     }
// }

// print_r($names);
// echo '--------';
// foreach ($names as $i => $name) {
//     $names[$i] = 'Roberto';
// }
// print_r($names);

// print_r($names);
// echo '--------';
// foreach ($names as &$name) {
//     $name = 'Daniel';
// }
// print_r($names);

// foreach ($names as $i => $name) {
//     echo "-$name<br>";
// }

// echo "El último valor de i fue $i<br>";
// echo "El último valor de name fue $name<br>";

// $teacher = [
//     'first_name' => 'Roberto',
//     'last_name' => 'Martínez',
//     'age' => 33,
//     'city' => 'San Salvador'
// ];

// echo 'Aquí está la info del teacher:<br><br>';

// foreach ($teacher as $key => $value) {
//     echo "$key: $value<br>";
// }

$studentsAges = [
    'Juan' => 22,
    'David' => 19,
    'Carmen' => 19,
    'Ricardo' => 25,
    'Cecibel' => 19,
];

// foreach ($studentsAges as $name => $age) {
//     echo "$name tiene $age años<br>";
// }

$lookingFor = 19;

// foreach ($studentsAges as $name => $age) {
//     if ($age == $lookingFor) {
//         echo "$name tiene $lookingFor años<br>"; // podemos usar $age o $lookingFor
//     }
// }


$ordinals = [
    'uno' => 'primero',
    'dos' => 'segundo',
    'tres' => 'tercero',
];

// foreach ($ordinals as $number) {
//     echo $number . "<br>";
//     if ($number == 'segundo') {
//         break;
//     }
// }

$i = 0;

// while ($i < 5) {
//     foreach ($ordinals as $number) {
//         echo $number . "<br>";
//         if ($number == 'tercero') {
//             break 2;
//         }
//     }

//     $i++;
// }

$countries = [
    'El Salvador', // 0
    'Guatemala',// 1
    'Honduras', //2 
    'Nicaragua', // 3
    'Costa Rica', //4
];

// for ($i = 0; $i < 5; $i++) { // un total de 5 veces
//     for ($j = 0; $j < count($countries); $j++) { //iteres entre cada país

//         echo $countries[$j] . "<br>";


//         if ($j == 4) {
//             break 2; // se sale inmediatamente de los dos
//         }
//     }

//     echo '-------<br>';
// }


// $students = ['Ricardo', 'Carlos', 'Diego', 'David', 'Roberto'];
// $money = 180;
// $payment = 35;

// while ($money > 0) {
//     foreach ($students as $student) {
//         if (($money - $payment) < 0) { // me alcanza para hacer un pago más?
//             break 2; // rompemos para no quedar en negativo
//         }

//         echo "Le di $$payment.00 a $student<br>";
//         $money -= $payment;
//         echo "Quedan $money<br>-------<br>";
//     }
//     // 30$ * 5 personas = 150, menos los 180 iniciales = 30
// }

$students = ['Ricardo', 'Carlos', 'Diego', 'David', 'Roberto', 'José'];
$money = 200;

// while ($money > 0) {
//     foreach ($students as $student) {
//         if (($money - 20) < 0) { // me alcanza para hacer un pago más?
//             break 2; // rompemos para no quedar en negativo
//         }

//         if ($student == 'Roberto') {
//             continue;
//         }

//         $money -= 20;
//         echo "Le di $20.00 a $student<br>";
//         echo "Quedan $money<br>-------<br>";
//     }
// }

// while ($money > 0) {
//     foreach ($students as $student) {
//         if (($money - 20) < 0) { // me alcanza para hacer un pago más?
//             break 2; // rompemos para no quedar en negativo
//         }

//         if ($student == 'Roberto') {
//             $money -= 40;
//             echo "Le di $40.00 a $student<br>";
//             echo "Quedan $money<br>-------<br>";

//             continue;
//         }

//         $money -= 20;
//         echo "Le di $20.00 a $student<br>";
//         echo "Quedan $money<br>-------<br>";
//     }
// }

$country = 'Colombia';

// switch ($country) {
//     case 'El Salvador':
//         echo 'sv';
//         break;
//     case 'Nicaragua':
//         echo 'ni';
//         break;
//     case 'Guatemala':
//         echo 'gt';
//         break;
//     case 'Honduras':
//         echo 'hn';
//         break;
//     case 'Panamá':
//         echo 'pa';
//         break;
//     case 'Costa Rica':
//         echo 'cr';
//         break;
//     default:
//         echo 'N/D';
//         break;
// }

$a = 5;
$b = 7;

// switch ($b - $a) {
//     case 44:
//         echo 'Resultado 44';
//         break;
//     case 2:
//         echo 'Resultado 2';
//         break;
//     case 8:
//         echo 'Resultado 8';
//         break;
// }

function calcComission($sale) {
    if ($sale > 100) {
        return $sale * 0.2;
    }

    return $sale * 0.1;
}

echo 'Tu comisión es $' . number_format(calcComission(1345.66), 2);
