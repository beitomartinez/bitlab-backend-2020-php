<?php

class Computer
{
    public $ram;
    public $hdd;
    public $processador;

    public function __construct($ram, $hdd, $processador = 'i5')
    {
        $this->ram = $ram;
        $this->hdd = $hdd;
        $this->processador = $processador;
        echo "Se acaba de crear una computadora con $ram de RAM, $hdd de Disco Duro y con procesador $processador !<br><br>";

        // Email 
    }
}