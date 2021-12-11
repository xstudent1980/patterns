<?php

namespace Observer\Widgets;

use Observer\Interfaces\IObserver;
use Observer\Interfaces\ISubject;
use Observer\Interfaces\IWidget;

class TwitterObserver implements IObserver, IWidget
{
    private string $twitter;
    private ISubject $subject;

    public function __construct(ISubject $subject)
    {
        $this->subject = $subject;
        $this->subject->registerObserver($this);
    }

    public function update($twitter, $lenta, $tv): void
    {
        $this->twitter = $twitter;

        $this->display();
    }

    public function display(): void
    {
        echo 'Twitter: ' . $this->twitter . PHP_EOL;
    }

    public function removeFromObserver(): void
    {
        $this->subject->removeObserver($this);
    }
}