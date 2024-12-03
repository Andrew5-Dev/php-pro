<?php

namespace Classes\Patterns\FactoryMethodTaxi\TaxiServices;

use Classes\Patterns\FactoryMethodTaxi\Cars\StandardCar;
use Classes\Patterns\FactoryMethodTaxi\Interfaces\CarType;
use Classes\Patterns\FactoryMethodTaxi\Interfaces\TaxiService;
class StandardTaxi implements TaxiService
{
    public function getCar(): CarType
    {
        return new StandardCar();
    }
}