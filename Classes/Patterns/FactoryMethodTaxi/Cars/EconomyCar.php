<?php

namespace Classes\Patterns\FactoryMethodTaxi\Cars;

use Classes\Patterns\FactoryMethodTaxi\Cars\Car;
class EconomyCar extends Car
{
    public function __construct()
    {
        $this->setModel("Daewoo Lanos");
        $this->setPrice(5);
    }
}
