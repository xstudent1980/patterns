<?php

namespace Strategy\Actions\Quack;

use Strategy\Interfaces\IQuackable;

class ExoticQuack implements IQuackable
{
    public function quack(): void
    {
        echo 'Meaow! Meaow!' . PHP_EOL;
    }
}