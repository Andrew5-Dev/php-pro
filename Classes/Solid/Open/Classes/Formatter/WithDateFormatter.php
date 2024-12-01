<?php

namespace Classes\Solid\Open\Classes\Formatter;

use Classes\Solid\Open\Interfaces\FormatterInterface;
class WithDateFormatter implements FormatterInterface
{
    public function format($string): string
    {
        return date('Y-m-d H:i:s') . ' ' . $string;
    }
}