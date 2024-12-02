<?php

namespace Classes\Solid\DependencyInversion;

use Classes\Solid\DependencyInversion\Interfaces\Database;
class Mysql implements Database
{
    public function getData()
    {
        return 'some data from database';
    }
}