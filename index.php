<?php

use Classes\Color;
use Classes\User;
use Classes\UserException;

require_once __DIR__ . '/Classes/Color.php';
require_once __DIR__ . '/Classes/Trait.php';
require_once __DIR__ . '/Classes/User.php';
require_once __DIR__ . '/Classes/UserException.php';

/*$color1 = new Color(250, 250, 250);
$color2 = new Color(0, 255, 0);
$color3 = new Color(0, 0, 255);

$color = new Color(250, 250, 250);
$mixedColor = $color->mix(new Color(100, 100, 100));

var_dump($mixedColor->getRed());
var_dump($mixedColor->getGreen());
var_dump($mixedColor->getBlue());*/


try {
    $user = new User();

    $user->setName("Віктор");
    $user->setAge(20);
    $user->setEmail("Email");

    $userData = $user->getAll();
    print_r($userData);

} catch (UserException $e) {
    echo "Помилка: " . $e->getMessage() . PHP_EOL;
}

try {
    $user = new User();

    $user->setName("Максим");
    $user->setAge(205);

    $userData = $user->getAll();
    print_r($userData);



} catch (UserException $e) {
    echo "Помилка: " . $e->getMessage() . PHP_EOL;
}