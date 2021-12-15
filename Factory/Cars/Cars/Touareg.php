<?php

namespace Factory\Cars;

use Factory\Car;
use Factory\PartsFactory\CarPartsFactory;

class Touareg extends Car
{
    private CarPartsFactory $factory;

    public function __construct(CarPartsFactory $factory)
    {
        $this->factory = $factory;

        $this->name = 'Touareg';
        $this->body = 'Big crossover';
    }

    public function configure(): void
    {
        echo 'Configuring ' . $this->name . PHP_EOL;
        echo 'Body is: ' . $this->body . PHP_EOL;

        $engine = $this->factory->createEngine();
        $paintColor = $this->factory->createPaint();
        $wheels = $this->factory->createWheels();
    }
}