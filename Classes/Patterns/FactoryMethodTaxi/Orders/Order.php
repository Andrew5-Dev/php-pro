<?php

namespace Classes\Patterns\FactoryMethodTaxi\Orders;

use Classes\Patterns\FactoryMethodTaxi\Interfaces\TaxiService;
abstract class Order
{
    abstract public function getOrder(): TaxiService;
}