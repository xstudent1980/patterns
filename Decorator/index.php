<?php
define('BASE_DIR', realpath((__DIR__ . '/..')));

require_once BASE_DIR . '/vendor/autoload.php';

use Decorator\BeverageBase;
use Decorator\Beverages\{Espresso, BlackTea, GreenTea};
use Decorator\Decorators\{SugarCondiment, MilkCondiment};

$espresso = new Espresso();
$blackTea = new BlackTea();
$greenTea = new GreenTea();

printBeverage($espresso);
printBeverage($blackTea);
printBeverage($greenTea);

echo '_________________________________' . PHP_EOL;

$capuccino = new SugarCondiment(new MilkCondiment(new Espresso()));
printBeverage($capuccino);

$greenTeaWithSugar = new SugarCondiment(new GreenTea());
printBeverage($greenTeaWithSugar);

function printBeverage(BeverageBase $beverage) {
    echo 'Beverage: '  . $beverage->getDescription() . ', Price: ' . $beverage->getCost() . PHP_EOL;
}