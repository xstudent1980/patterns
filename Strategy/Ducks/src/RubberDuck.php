<?php

namespace Strategy;

use Strategy\Fly\NoFly;

class RubberDuck extends BaseDuck
{
    public function __construct()
    {
        parent::__construct();
        $this->flyBehaviour = new NoFly();
    }

    public function display(): void
    {
        echo 'I`m a rubber duck!' . PHP_EOL;
    }
}