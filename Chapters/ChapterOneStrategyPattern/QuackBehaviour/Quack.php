<?php

namespace Chapters\ChapterOneStrategyPattern\QuackBehaviour;

use Chapters\ChapterOneStrategyPattern\Interfaces\IQuackBehaviour;

class Quack implements IQuackBehaviour
{

    public function quack() : string
    {
        return "Real Duck Quacks";
    }
}