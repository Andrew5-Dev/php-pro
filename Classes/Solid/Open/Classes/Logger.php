<?php

namespace Classes\Solid\Open\Classes;

use Classes\Solid\Open\Interfaces\DeliveryInterface;
use Classes\Solid\Open\Interfaces\FormatterInterface;
class Logger
{
    private FormatterInterface $formatter;
    private DeliveryInterface $delivery;

    public function __construct(FormatterInterface $formatter, DeliveryInterface $delivery)
    {
        $this->formatter = $formatter;
        $this->delivery = $delivery;
    }

    public function log($string)
    {
        $formattedString = $this->formatter->format($string);
        $this->delivery->deliver($formattedString);
    }
}