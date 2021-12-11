<?php

namespace Observer;

use Observer\Interfaces\IObserver;
use Observer\Interfaces\ISubject;
use Observer\Widgets\LentaObserver;
use Observer\Widgets\TvObserver;
use Observer\Widgets\TwitterObserver;

class NewsAggregator implements ISubject
{
    private array $observers;

    public function __construct()
    {
        $this->observers = [];
    }

    public function registerObserver(IObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(IObserver $observer): void
    {
        if (false !== ($index = array_search($observer, $this->observers, true))) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers(): void
    {
        $twitter = $this->getTwitterNews();
        $lenta = $this->getLentaNews();
        $tv = $this->getTvNews();

        foreach ($this->observers as $observer) {
            $observer->update($twitter, $lenta, $tv);
        }
    }

    public function getTwitterNews(): string
    {
        $news = [
            'Нововсть из Twitter номер 1',
            'Нововсть из Twitter номер 2',
            'Нововсть из Twitter номер 3'
        ];

        return $news[rand(0,2)];
    }

    public function getLentaNews(): string
    {
        $news = [
            'Нововсть из Lenta номер 1',
            'Нововсть из Lenta номер 2',
            'Нововсть из Lenta номер 3'
        ];

        return $news[rand(0,2)];
    }

    public function getTvNews(): string
    {
        $news = [
            'Нововсть из Tv номер 1',
            'Нововсть из Tv номер 2',
            'Нововсть из Tv номер 3'
        ];

        return $news[rand(0,2)];
    }

    public function newNewsAvailable(): void
    {
        $this->notifyObservers();
    }
}