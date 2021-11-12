<?php

namespace Chapters\ChapterThreeDecoratorPattern;

class Mocha implements BeverageInterface
{
    private BeverageInterface $beverage;

    public function __construct(BeverageInterface $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getCost() : int
    {
        return 10 + $this->beverage->getCost();
    }

    public function getDescription() : string
    {
        return $this->getDescription() . " with Mocha";
    }
}