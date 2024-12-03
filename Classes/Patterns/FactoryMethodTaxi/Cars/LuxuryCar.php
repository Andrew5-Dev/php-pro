<?php

namespace Classes\Patterns\FactoryMethodTaxi\Cars;

use Classes\Patterns\FactoryMethodTaxi\Interfaces\Cars;
class LuxuryCar extends Car
{
    public function __construct()
    {
        $this->setModel("BMW 7 Series");
        $this->setPrice(20);
    }
}