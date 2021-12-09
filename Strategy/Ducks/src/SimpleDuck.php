<?php

namespace Strategy;

class SimpleDuck extends BaseDuck
{
    public function display(): void
    {
        echo 'Hi! I`m an simple duck' . PHP_EOL;
    }
}