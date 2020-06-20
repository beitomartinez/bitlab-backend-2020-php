<?php

namespace People; // "Ubicar" la clase

use DateTime;
use Irving\Phone as IrvingPhone;
use Steven\Car;

require_once 'People/Person.php'; // importar contenido de archivo

$phone = new IrvingPhone;
$car = new Car;

$person = new Person;
$person->sayHi();

$datetime = new DateTime();