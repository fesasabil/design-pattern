<?php

function __autoload($className) {
    include $className. '.php';
}

$pool = new FoodPool();

$food1 = $food->getFood();
$food2 = $food->getFood();

echo $food1->getName (). PHP_EOL;
$food->release($food1);

$food3 = $food->getFood ();
echo $food3->getName (). PHP_EOL;

// var_dump($food);
echo '<pre>' . var_export($food, true) . '</pre>';