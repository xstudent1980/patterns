<?php

namespace Observer\Interfaces;

interface ISubject
{
    public function registerObserver(IObserver $observer): void;

    public function removeObserver(IObserver $observer): void;

    public function notifyObservers(): void;
}