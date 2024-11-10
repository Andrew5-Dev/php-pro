<?php

require_once __DIR__ .  '/app/Controllers/Color.php';
require_once __DIR__ .  '/app/Controllers/Trait.php';

$color1 = new Color(250, 250, 250);
$color2 = new Color(0, 255, 0);
$color3 = new Color(0, 0, 255);

$color = new Color(250, 250, 250);
$mixedColor = $color->mix(new Color(100, 100, 100));

var_dump($mixedColor->getRed());
var_dump($mixedColor->getGreen());
var_dump($mixedColor->getBlue());

$test = new Test();
echo $test->getSum();


