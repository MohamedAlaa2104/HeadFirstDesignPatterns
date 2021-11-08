<?php

namespace Chapters\ChapterTwoObserverPattern;

use Chapters\ChapterTwoObserverPattern\Interfaces\ObserverInterface;
use Chapters\ChapterTwoObserverPattern\Interfaces\SubjectInterface;

class WeatherData implements SubjectInterface
{
    /**
     * @var ObserverInterface[]
     */
    private array $observers;

    public function registerObserver(ObserverInterface $observer)
    {
        $key = spl_object_hash($observer);
        if (!isset($this->observers[$key])) {
            $this->observers[$key] = $observer;
        }
    }

    public function removeObserver(ObserverInterface $observer)
    {
        $key = spl_object_hash($observer);
        if (isset($this->observers[$key])) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer){
            $observer->update();
        }
    }

    public function getTemperature() : float
    {
        return 30;
    }

    public function getHumidity() : float
    {
        return 30;
    }

    public function getPressure() : float
    {
        return 30;
    }

    public function getObservers() :array
    {
        return $this->observers;
    }
}