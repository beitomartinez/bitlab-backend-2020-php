<?php

require_once 'Computer.php';
// $myComputer = new Computer('16GB', '5TB', 'i7');
// $otherPC = new Computer('8GB', '1TB', 'i3');


require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Moto.php';

$myVehicle = new Vehicle();
$myVehicle->accelerate();
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


$myCar = new Car(4);
$myCar->start();
echo '<br>';
$myCar->stop();
echo '<br>';
$myCar->honk();
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$myMoto = new Moto();
$myMoto->brand = 'Yamaha'; // Propiedades del padre
$myMoto->hasBasket = true; // Propiedades propias de la clase
$myMoto->start(); // Llamar métodos del padre
echo '<br>';
$myMoto->stop();
echo '<br>';
$myMoto->checkBasket(); // Llamar métodos propios de la clase
echo '<br>';
$myMoto->sayBrand();
echo '<br>';
$myMoto->honk(); // Sobrescribir y llamar métodos del padre