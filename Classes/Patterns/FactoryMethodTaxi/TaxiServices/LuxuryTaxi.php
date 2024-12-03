<?php

namespace Classes\Patterns\FactoryMethodTaxi\TaxiServices;

use Classes\Patterns\FactoryMethodTaxi\Cars\LuxuryCar;
use Classes\Patterns\FactoryMethodTaxi\Interfaces\CarType;
use Classes\Patterns\FactoryMethodTaxi\Interfaces\TaxiService;

class LuxuryTaxi implements TaxiService
{
    public function getCar(): CarType
    {
        return new LuxuryCar();
    }
}
