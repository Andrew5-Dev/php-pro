<?php
require_once __DIR__ . '/vendor/autoload.php';


use Classes\Patterns\Builder\Contact;

$contact = new Contact();
$newContact = $contact->phone('000-555-000')
    ->name("John")
    ->surname("Surname")
    ->email("john@email.com")
    ->address("Some address")
    ->build();

var_dump($newContact);


/*use Classes\Patterns\FactoryMethodTaxi\Cars\EconomyCar;
use Classes\Patterns\FactoryMethodTaxi\Orders\EconomyOrder;
use Classes\Patterns\FactoryMethodTaxi\TaxiServices\EconomyTaxi;




$economy_order = new EconomyOrder();
$economy_car = $economy_order->getOrder()->getCar();
var_dump($economy_car);*/



/*use Classes\Tipes\Color;
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
}*/