<?php

namespace Chapters\ChapterOneStrategyPattern\Modules;

class RubberDuck extends Duck
{
    public function display(): string
    {
        return "This Looks Like Rubber Duck";
    }
}