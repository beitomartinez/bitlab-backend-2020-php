<?php

class Vehicle
{
    public $tiresCount;
    public $plateNumber;
    public $brand;
    public $year;
    public $model;

    public function start()
    {
        echo 'He arrancado';
    }
    
    public function stop()
    {
        echo 'Me he apagado';
    }
    
    public function accelerate()
    {
        echo 'Estoy acelerando';
    }
    
    public function brake()
    {
        echo 'Estoy frenando';
    }
    
    public function honk()
    {
        echo 'Bip Bip';
    }

    public function sayBrand()
    {
        echo "Soy de la marca $this->brand";
    }
}