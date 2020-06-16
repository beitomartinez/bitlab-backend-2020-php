<?php

class Car
{
    public $brand;
    public $model;
    public $year;
    public $color;
    public $country;
    public $gas;
    public $owner;

    public function start()
    {
        echo 'Ya arranqué :D';
    } 

    public function stop()
    {
        echo 'Me he detenido';
    }

    public function checkGas()
    {
        if ($this->gas > 0) {
            echo 'Tengo gas :D';
        } else {
            echo 'No tengo gas :(';
        }
    }

    public function getOwner()
    {
        return $this->owner->name;
    }
}