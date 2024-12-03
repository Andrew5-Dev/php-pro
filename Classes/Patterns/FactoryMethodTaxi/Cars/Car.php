<?php

namespace Classes\Patterns\FactoryMethodTaxi\Cars;

use Classes\Patterns\FactoryMethodTaxi\Interfaces\CarType;
abstract class Car implements CarType
{
    private string $model = "";
    private int $price = 0;

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
}