<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public $tiresCount = 4;
    public $doorsCount;

    public function __construct($doors)
    {
        $this->doorsCount = $doors;
    }

    public function openWindows()
    {
        echo 'Estoy abriendo una ventana';
    }

    public function countDoors()
    {
        echo "Tengo $this->doorsCount puertas";
    }

    public function honk()
    {
        echo 'po po';
    }
}