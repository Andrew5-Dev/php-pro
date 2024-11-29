<?php

namespace Classes;

class UserException extends \Exception {
    public function __construct($methodName, $code = 0, Exception $previous = null) {
        $message = "Метод $methodName не існує.";
        parent::__construct($message, $code, $previous);
    }
}