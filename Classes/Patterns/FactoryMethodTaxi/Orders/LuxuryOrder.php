<?php

namespace Classes\Patterns\FactoryMethodTaxi\Orders;

use Classes\Patterns\FactoryMethodTaxi\Interfaces\TaxiService;
use Classes\Patterns\FactoryMethodTaxi\TaxiServices\LuxuryTaxi;
class LuxuryOrder extends Order
{
    public function getOrder(): TaxiService
    {
        return new LuxuryTaxi();
    }
}