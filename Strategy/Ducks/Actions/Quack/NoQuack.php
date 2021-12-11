<?php

namespace Strategy\Actions\Quack;

use Strategy\Interfaces\IQuackable;

class NoQuack implements IQuackable
{
    public function quack(): void
    {
    }
}