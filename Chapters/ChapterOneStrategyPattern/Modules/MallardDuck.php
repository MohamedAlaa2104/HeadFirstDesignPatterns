<?php

namespace Chapters\ChapterOneStrategyPattern\Modules;

class MallardDuck extends Duck
{
    public function display(): string
    {
        return "This Looks Like Mallard Duck";
    }
}