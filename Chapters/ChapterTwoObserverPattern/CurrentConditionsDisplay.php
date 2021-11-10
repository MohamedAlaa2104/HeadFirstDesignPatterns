<?php

namespace Chapters\ChapterTwoObserverPattern;

use Chapters\ChapterTwoObserverPattern\Interfaces\DisplayInterface;
use Chapters\ChapterTwoObserverPattern\Interfaces\ObserverInterface;
use Chapters\ChapterTwoObserverPattern\Interfaces\SubjectInterface;

class CurrentConditionsDisplay implements DisplayInterface , ObserverInterface
{
    private SubjectInterface $subject;
    private float $temperature;
    private float $humidity;

    public function __construct(SubjectInterface $subject)
    {
        $this->subject = $subject;
    }

    public function display() : string
    {
        return "Temperature : " . $this->temperature . " and Humidity : " . $this->humidity;
    }

    public function update() : string
    {
        $this->temperature = $this->subject->getTemperature();
        $this->humidity = $this->subject->getHumidity();
        return $this->display();
    }
}