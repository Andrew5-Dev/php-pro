<?php

namespace Classes\Solid\InterfaceSegregation\Interfaces;

use Classes\Solid\InterfaceSegregation\Interfaces\Bird;
interface FlyingBird extends Bird
{
    public function fly();
}