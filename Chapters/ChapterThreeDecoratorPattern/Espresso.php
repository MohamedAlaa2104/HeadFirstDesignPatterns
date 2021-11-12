<?php

namespace Chapters\ChapterThreeDecoratorPattern;

class Espresso implements BeverageInterface
{

    public function getCost() : int
    {
        return 30;
    }

    public function getDescription() : string
    {
        return "Espresso";
    }
}