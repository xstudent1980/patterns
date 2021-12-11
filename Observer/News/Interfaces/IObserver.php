<?php

namespace Observer\Interfaces;

interface IObserver
{
    public function update(string $twitter, string $lenta, string $tv): void;

    public function removeFromObserver(): void;
}