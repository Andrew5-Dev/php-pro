<?php

namespace Classes\Solid\Open\Interfaces;

interface DeliveryInterface
{
    public function deliver($format): void;
}