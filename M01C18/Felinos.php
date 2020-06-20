<?php

class Felinos
{
    public $weight;
    public $height;
    public $name;
    public $furLength;
    public $foodType;

    public function __construct($weight, $height, $name, $furLength, $foodType)
    {
        $this->weight = $weight;
        $this->height = $height;
        $this->name = $name;
        $this->furLength = $furLength;
        $this->foodType = $foodType;
        $this->notify();
    }

    public static function sleepTime()
    {
        echo 'Los gatos duermen por lo egeneral, 8 horas al día';
    }

    public function notify()
    {
        echo 'Se ha creado un nuevo felino';
    }

    public function growl()
    {
        echo 'rawr';
    }

    public function eat()
    {
        echo "Estoy comiendo mi comida favorita, $this->foodType";
    }
}