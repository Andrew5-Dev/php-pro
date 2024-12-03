<?php

namespace Classes\Patterns\FactoryMethodTaxi\Interfaces;

interface CarType
{
    public function getModel(): string;
    public function setModel(string $model): void;
    public function getPrice(): int;
    public function setPrice(int $price): void;
}