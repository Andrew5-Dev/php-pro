<?php

namespace Classes\Solid\Open\Classes\Delivery;

use Classes\Solid\Open\Interfaces\DeliveryInterface;
class DeliveryBySms implements DeliveryInterface
{
    public function deliver($format): void
    {
        echo "Вивід формату ({$format}) по смс";
    }
}