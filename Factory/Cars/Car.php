<?php

namespace Factory;

use Factory\Parts\Engine;
use Factory\Parts\Paint;
use Factory\Parts\Wheels;

abstract class Car
{
    protected string $name = '';
    protected string $body = 'Caravan';

    protected Engine $engine;
    protected Paint $paintColor;
    protected Wheels $wheels;


    abstract public function configure(): void;

    public function assembleBody(): void
    {
        echo 'Body is assembled' . PHP_EOL;
    }

    public function installEngine(): void
    {
        echo 'Engine is in its place' . PHP_EOL;
    }

    public function paint(): void
    {
        echo 'Car is painted' . PHP_EOL;
    }

    public function installWheels(): void
    {
        echo 'Wheels ara installed' . PHP_EOL;
    }
}