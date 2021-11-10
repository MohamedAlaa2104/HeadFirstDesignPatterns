<?php

namespace Chapters\ChapterTwoObserverPattern;

use Chapters\ChapterTwoObserverPattern\Interfaces\DisplayInterface;
use Chapters\ChapterTwoObserverPattern\Interfaces\ObserverInterface;
use Chapters\ChapterTwoObserverPattern\Interfaces\SubjectInterface;
use http\Encoding\Stream\Inflate;

class StatisticsDisplay implements DisplayInterface , ObserverInterface
{
    private SubjectInterface $subject;
    private float $temperature;
    private float $pressure;
    private float $humidity;

    public function display() : string
    {
        return "Temp : " . $this->temperature . " ,Pressure : " . $this->pressure . " ,Humidity : " . $this->humidity;
    }

    public function update() : string
    {
        $this->temperature = $this->subject->getTemperature();
        $this->pressure = $this->subject->getPressure();
        $this->humidity = $this->subject->getHumidity();
        return $this->display();
    }
}