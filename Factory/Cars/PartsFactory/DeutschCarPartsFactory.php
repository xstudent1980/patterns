<?php

namespace Factory\PartsFactory;

use Factory\Parts\BigWheels;
use Factory\Parts\DieselEngine;
use Factory\Parts\Engine;
use Factory\Parts\Paint;
use Factory\Parts\Wheels;
use Factory\Parts\WhitePaint;

class DeutschCarPartsFactory extends CarPartsFactory
{

    public function createEngine(): Engine
    {
        return new DieselEngine();
    }

    public function createPaint(): Paint
    {
        return new WhitePaint();
    }

    public function createWheels(): Wheels
    {
        return new BigWheels();
    }
}