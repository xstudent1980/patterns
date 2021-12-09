<?php

use Strategy\ExoticDuck;
use Strategy\Fly\NoFly;
use Strategy\Quack\ExoticQuack;
use Strategy\RubberDuck;
use Strategy\SimpleDuck;
use Strategy\UpgradeableDuck;
use Strategy\WoodenDuck;

require_once './vendor/autoload.php';

$ducks = [];
$ducks[] = new ExoticDuck;
$ducks[] = new SimpleDuck;
$ducks[] = new WoodenDuck();
$ducks[] = new RubberDuck();
$ducks[] = new UpgradeableDuck();

foreach($ducks as $duck) {
    $duck->display();
    $duck->swim();
    $duck->quack();
    $duck->fly();

    echo PHP_EOL;
}

$duck->setFlyBehaviour(new NoFly());
$duck->fly();

$duck->setQuackBehaviour(new ExoticQuack());
$duck->quack();
