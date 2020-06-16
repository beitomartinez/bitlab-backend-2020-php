<?php

class Phone
{
    public $os;
    public $price;
    public $model;
    public $brand;
    public $publishDate;

    public function call(string $number, float $saldo)
    {
        if ($saldo > 0) {
            echo "Estoy llamando al número $number";
        } else {
            echo "Poneme saldo :(";
        }
    }

    public function sms(string $number, string $message)
    {
        echo "Le eviaré un mesanje al número $number que dice: '{$message}'";
    }
    
    public function takePicture()
    {
        if (rand(0,1) == 0) {
            echo 'No hay suficiente espacio en el teléfono';
        } else {
            echo 'Foto tomada con éxito';
        }
    }
}