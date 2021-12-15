<?php

namespace Factory\Parts;

class GasolineEngine extends Engine
{
    public function __construct()
    {
        echo 'Engine is Gasoline' . PHP_EOL;
    }
}