<?php

namespace Classes\Patterns\FactoryMethodTaxi\Interfaces;

use Classes\Patterns\FactoryMethodTaxi\Interfaces\CarType;

interface TaxiService
{
    public function getCar(): CarType;
}