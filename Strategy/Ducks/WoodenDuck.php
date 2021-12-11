<?php

namespace Strategy;

use Strategy\Actions\Fly\NoFly;
use Strategy\Actions\Quack\NoQuack;

class WoodenDuck extends BaseDuck
{
    public function __construct()
    {
        $this->setFlyBehaviour(new NoFly());
        $this->setQuackBehaviour(new NoQuack());

        parent::__construct();
    }

    public function display(): void
    {
        echo 'I`m a wooden duck!' . PHP_EOL;
    }
}