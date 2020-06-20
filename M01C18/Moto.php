<?php

require_once 'Vehicle.php';

class Moto extends Vehicle
{
    public $tiresCount = 2;
    public $hasBasket = false;

    public function checkBasket()
    {
        echo ($this->hasBasket ? 'Sí' : 'No') . ' tengo canastita';
    }

    public function honk()
    {
        echo 'pi pi';
    }
}