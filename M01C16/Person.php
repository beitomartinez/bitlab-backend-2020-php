<?php

class Person
{
    public $name = 'Roberto';
    public $age;
    public $city = '';
    public $documentNumber = null;
    public $car = null;

    public function sayName()
    {
        echo "Mi nombre es {$this->name}";
    }
    
    public function sayAge()
    {
        echo "Mi edad actual es {$this->age}";
    }

    public function jump(int $times)
    {
        if ($times > 10) {
            echo 'No puedo saltar tantas veces';
        } else {
            for($i = 1; $i <= $times; $i++) {
                echo "Estoy saltando por {$i}a vez<br>";
            }
        }
    }

    public function getCar()
    {
        if (is_null($this->car)) {
            echo 'No tengo carro';
        } else {
            echo "Tengo un {$this->car->brand} {$this->car->model} " .
                "{$this->car->year} de color {$this->car->color} y que tiene " .
                "{$this->car->gas} de gas";
        }
    }
}