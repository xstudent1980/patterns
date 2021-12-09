<?php

namespace Strategy\Quack;

use Strategy\Interfaces\IQuackable;

class Quack implements IQuackable
{
    public function quack(): void
    {
        echo 'Quack! Quack!' . PHP_EOL;
    }
}