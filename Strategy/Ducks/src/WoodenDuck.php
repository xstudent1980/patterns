<?php

namespace Strategy;

use Strategy\Fly\NoFly;
use Strategy\Quack\NoQuack;

class WoodenDuck extends BaseDuck
{
    public function __construct()
    {
        parent::__construct();
        $this->flyBehaviour = new NoFly();
        $this->quackBehaviour = new NoQuack();
    }

    public function display(): void
    {
        echo 'I`m a wooden duck!' . PHP_EOL;
    }
}