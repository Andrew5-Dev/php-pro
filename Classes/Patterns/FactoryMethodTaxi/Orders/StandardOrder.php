<?php

namespace Classes\Patterns\FactoryMethodTaxi\Orders;

use Classes\Patterns\FactoryMethodTaxi\Interfaces\TaxiService;
use Classes\Patterns\FactoryMethodTaxi\TaxiServices\StandardTaxi;
class StandardOrder extends Order
{
    public function getOrder(): TaxiService
    {
        return new StandardTaxi();
    }
}