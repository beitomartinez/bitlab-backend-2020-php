<?php

class Gatito extends Felinos
{
    public function __construct($weight, $height, $name, $furLength, $foodType)
    {
        parent::__construct($weight, $height, $name, $furLength, $foodType);

        echo '<br>';
        echo 'Se ha creado un gatito';
    }

    public function notify()
    {
        echo 'Se ha creado un nuevo gatito';
    }
}