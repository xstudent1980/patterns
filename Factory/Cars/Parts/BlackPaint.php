<?php

namespace Factory\Parts;

class BlackPaint extends Paint
{
    public function __construct()
    {
        echo 'Paint is black' . PHP_EOL;
    }
}