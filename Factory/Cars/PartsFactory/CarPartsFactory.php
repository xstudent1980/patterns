<?php

namespace Factory\PartsFactory;

use Factory\Parts\Engine;
use Factory\Parts\Paint;
use Factory\Parts\Wheels;

abstract class CarPartsFactory
{
    abstract public function createEngine(): Engine;
    abstract public function createPaint(): Paint;
    abstract public function createWheels(): Wheels;
}