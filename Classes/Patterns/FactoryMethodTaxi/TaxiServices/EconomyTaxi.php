<?php

namespace Classes\Patterns\FactoryMethodTaxi\TaxiServices;

use Classes\Patterns\FactoryMethodTaxi\Cars\EconomyCar;
use Classes\Patterns\FactoryMethodTaxi\Interfaces\CarType;
use Classes\Patterns\FactoryMethodTaxi\Interfaces\TaxiService;
class EconomyTaxi implements TaxiService
{
    public function getCar(): CarType
    {
        return new EconomyCar();
    }
}