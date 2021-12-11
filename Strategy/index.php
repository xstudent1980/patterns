<?php
define('BASE_DIR', realpath((__DIR__ . '/..')));

require_once BASE_DIR . '/vendor/autoload.php';

use Strategy\SimpleDuck;
use Strategy\ExoticDuck;
use Strategy\WoodenDuck;
use Strategy\RubberDuck;
use Strategy\UpgradeableDuck;

use Strategy\Actions\Quack\ExoticQuack;
use Strategy\Actions\Fly\NoFly;

$ducks = [];
$ducks[] = new SimpleDuck;
$ducks[] = new ExoticDuck;
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
