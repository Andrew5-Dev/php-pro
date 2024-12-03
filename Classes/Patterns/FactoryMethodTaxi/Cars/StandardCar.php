<?php

namespace Classes\Patterns\FactoryMethodTaxi\Cars;

use Classes\Patterns\FactoryMethodTaxi\Cars;

class StandardCar extends Car
{
    public function __construct()
    {
        $this->setModel("Volkswagen Passat");
        $this->setPrice(10);
    }
}