<?php

namespace Factory\Parts;

class DieselEngine extends Engine
{
    public function __construct()
    {
        echo 'Engine is Diesel' . PHP_EOL;
    }
}