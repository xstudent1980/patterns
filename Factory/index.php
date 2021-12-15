<?php
define('BASE_DIR', realpath((__DIR__ . '/..')));

require_once BASE_DIR . '/vendor/autoload.php';

use Factory\Facilitaes\RussianVolkswagenFacility;

class main
{
    public function run(): void
    {
        $facility = new RussianVolkswagenFacility();
        $facility->getCar('Golf');
        echo PHP_EOL;
        $facility->getCar('Passat');
        echo PHP_EOL;
        $facility->getCar('Tiguan');
        echo PHP_EOL;
        $facility->getCar('Touareg');
        echo PHP_EOL;
    }
}

$app = new main();
$app->run();