<?php

namespace Classes\Solid\Open\Classes\Formatter;

use Classes\Solid\Open\Interfaces\FormatterInterface;
class RawFormatter implements FormatterInterface
{
    public function format($string): string
    {
        return $string;
    }
}