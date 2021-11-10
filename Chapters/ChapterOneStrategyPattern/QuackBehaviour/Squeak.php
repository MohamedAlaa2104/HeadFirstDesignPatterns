<?php

namespace Chapters\ChapterOneStrategyPattern\QuackBehaviour;

use Chapters\ChapterOneStrategyPattern\Interfaces\IQuackBehaviour;

class Squeak implements IQuackBehaviour
{

    public function quack() : string
    {
        return "Rubber Duck Squeak";
    }
}