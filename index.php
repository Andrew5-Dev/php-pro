<?php

spl_autoload_register(function ($namespace) {
    $namespace = str_replace('\\', DIRECTORY_SEPARATOR, $namespace);
    $file = __DIR__ . "/$namespace.php";

    echo $file . '<br>';

    if (!file_exists($file)) {
        throw new Exception("Class $namespace not found");
    }

    require_once $file;
});


use Classes\Tipes\Color;
use Classes\User;
use Classes\UserException;


$color1 = new Color(250, 250, 250);
$color2 = new Color(0, 255, 0);
$color3 = new Color(0, 0, 255);

$color = new Color(250, 250, 250);
$mixedColor = $color->mix(new Color(100, 100, 100));

var_dump($mixedColor->getRed());
var_dump($mixedColor->getGreen());
var_dump($mixedColor->getBlue());


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