<?php

namespace Classes\Solid\DependencyInversion;

use Classes\Solid\DependencyInversion\Interfaces\Database;

class Controller
{
    private Database $adapter;

    public function __construct(Database $adapter)
    {
        $this->adapter = $adapter;
    }

    public function getData()
    {
        return $this->adapter->getData();
    }
}