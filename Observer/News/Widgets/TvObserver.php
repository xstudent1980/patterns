<?php

namespace Observer\Widgets;

use Observer\Interfaces\IObserver;
use Observer\Interfaces\ISubject;
use Observer\Interfaces\IWidget;

class TvObserver implements IObserver, IWidget
{
    private string $tv;
    private ISubject $subject;

    public function __construct(ISubject $subject)
    {
        $this->subject = $subject;
        $this->subject->registerObserver($this);
    }

    public function update($twitter, $lenta, $tv): void
    {
        $this->tv = $tv;

        $this->display();
    }

    public function display(): void
    {
        echo 'TV: ' . $this->tv . PHP_EOL;
    }

    public function removeFromObserver(): void
    {
        $this->subject->removeObserver($this);
    }
}