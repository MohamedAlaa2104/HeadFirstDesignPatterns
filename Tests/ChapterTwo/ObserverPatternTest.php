<?php

namespace ChapterTwo;

use Chapters\ChapterTwoObserverPattern\CurrentConditionsDisplay;
use Chapters\ChapterTwoObserverPattern\WeatherData;
use PHPUnit\Framework\TestCase;

class ObserverPatternTest extends TestCase
{
    public function testCanCreateAndAttachCurrentConditionsDisplayToWeatherData()
    {
        $weatherData = new WeatherData();

        $display = new CurrentConditionsDisplay($weatherData);

        $weatherData->registerObserver($display);

        $this->assertCount(1 , $weatherData->getObservers());
    }

    public function testCanRemoveCurrentConditionsDisplayFromWeatherData()
    {
        $weatherData = new WeatherData();

        $display = new CurrentConditionsDisplay($weatherData);

        $weatherData->registerObserver($display);

        $weatherData->removeObserver($display);

        $this->assertCount(0, $weatherData->getObservers());
    }
}