<?php

// echo 'Hola mundo';
// echo 'Este es un mensaje<br>de dos líneas';

// ---------- DEFINICIÓN DE VARIABLES
$myBoolean = true;
// echo gettype($myBoolean);
// echo var_dump($myBoolean); // Definición técnica de la var

$name = 'Roberto';
$workplace = "Bitlab";

$myInteger = 988;

if (is_int($workplace)) {
    echo 'Es entero!';
}

if (is_string($myInteger)) {
    echo 'Es una cadena!';
}

if (isset($myArray)) {
    echo 'Sí, está definida!';
}

// ---------- BOOLEAN
// echo var_dump((bool) ''); // bool(false)
// echo var_dump((bool) 1); // bool(true)
// echo var_dump((bool) -2); // bool(true)
// echo var_dump((bool) 'foo'); // bool(true)
// echo var_dump((bool) 2.43); // bool(true)
// echo var_dump((bool) array(900)); // bool(true)
// echo var_dump((bool) array()); // bool(true)
// echo var_dump((bool) 'false'); // bool(true)


// ---------- ENTEROS
// echo var_dump((int) true); // int(1)
// echo var_dump((int) (244 > 90)); // int(1)
// echo var_dump((int) 1.0001); // int(1)
// echo var_dump((int) 4.99999999999); // int(4)
// echo var_dump((int) "90 lapiceros"); // int(90)
// echo var_dump((int) "1.5 litros de agua"); // int(1)
// echo var_dump((int) "Me tomé 2 litros de soda"); // int(0)
// echo var_dump((int) [12, 2, 3, 4]); // int(1)
// echo var_dump((int) []); // int(0)

$myFloat = 99.99;

// ---------- STRINGS

// echo 'Esto está  bien.  Puedo dejar múltiples líneas';
// echo 'Arnold dijo una vez, "I\'ll be back"';
// echo 'He borrado mis archivos del C:\\';
// echo 'Esta expresión no se va a expandir: \n';
// echo 'Esto tampoco no se va a expandir $name';

// echo "El personaje saludó así: \"HOLA TODOS\"";
// echo "Mi nombre es $name y doy clases en $workplace";
// echo "El precio sin descuento es $$myFloat";

$fruit = "manzana";
// echo "Hoy me comí una $fruit";
// echo "Hoy me comí dos {$fruit}s";

$fruits = ['manzana', 'pera', 'sandía'];
// echo "Hoy me comí dos {$fruits[2]}s";

$myString3 = 'a-e-i-o-u';
// print_r(explode(',', $myString3));

$myString3 = 'Café, Té, Soda, Agua';
// print_r(explode(', ', $myString3));

// echo "Mis frutas favoritas son: " . implode(', ', $fruits);

$price = 66.666667;
// echo number_format($price, 2);
// echo number_format($price, 20);
// echo number_format($price, 0);
// echo number_format($price, 2, ',', '.');

// echo strlen('Roberto');
// echo strtoupper('Roberto');
// echo strtolower('Roberto');
// echo ucfirst('roberto');
// echo strpos('Roberto', 'be');
// echo strpos('Roberto', 'bo');
echo trim(' Hola Amigos ');
