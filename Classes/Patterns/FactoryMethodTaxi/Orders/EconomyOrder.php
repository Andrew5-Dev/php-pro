<?php

namespace Classes\Patterns\FactoryMethodTaxi\Orders;

use Classes\Patterns\FactoryMethodTaxi\Interfaces\TaxiService;
use Classes\Patterns\FactoryMethodTaxi\TaxiServices\EconomyTaxi;
class EconomyOrder extends Order
{
    public function getOrder(): TaxiService
    {
        return new EconomyTaxi();
    }
}