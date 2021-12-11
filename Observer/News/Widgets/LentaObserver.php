<?php

namespace Observer\Widgets;

use Observer\Interfaces\IObserver;
use Observer\Interfaces\ISubject;
use Observer\Interfaces\IWidget;

class LentaObserver implements IObserver, IWidget
{
    private string $lenta;
    private ISubject $subject;

    public function __construct(ISubject $subject)
    {
        $this->subject = $subject;
        $this->subject->registerObserver($this);
    }

    public function update($twitter, $lenta, $tv): void
    {
        $this->lenta = $lenta;

        $this->display();
    }

    public function display(): void
    {
        echo 'Lenta: ' . $this->lenta . PHP_EOL;
    }

    public function removeFromObserver(): void
    {
        $this->subject->removeObserver($this);
    }
}