<?php

namespace Factory\PartsFactory;

use Factory\Parts\BlackPaint;
use Factory\Parts\Engine;
use Factory\Parts\GasolineEngine;
use Factory\Parts\MediumWheels;
use Factory\Parts\Paint;
use Factory\Parts\Wheels;

class RussianCarPartsFactory extends CarPartsFactory
{

    public function createEngine(): Engine
    {
        return new GasolineEngine();
    }

    public function createPaint(): Paint
    {
        return new BlackPaint();
    }

    public function createWheels(): Wheels
    {
        return new MediumWheels();
    }
}