<?php

require_once 'Person.php';
require_once 'Car.php';
require_once 'Phone.php';

$roberto = new Person();
$roberto->age = 12;
// $roberto->sayName();
// echo '<br>';

$car = new Car();
$car->brand = 'Honda';
$car->model = 'Civic';
$car->year = 2005;
$car->color = 'rojo';
$car->country = 'Corea del sur';
$car->gas = 15;

$car->owner = $roberto;

$roberto->car = $car;
// $roberto->getCar();
// echo '<br>';

// echo "El dueño del carro {$car->brand} {$car->model} {$car->year} es " . $car->getOwner();

$phone = new Phone();
$phone->os = 'Android';
$phone->price = '$99.99';
$phone->model = 'Y5';
$phone->brand = 'Huawei';

// $phone->call('2257-7777', 5.25);
// $phone->sms('2257-7777', 'Quisiera hacer un pedido de pizza rica');
// $phone->takePicture();

// echo "Tengo un $phone->brand $phone->model y me costó $phone->price";

// echo (new DateTime())->format('Y-m-d h:i:s');