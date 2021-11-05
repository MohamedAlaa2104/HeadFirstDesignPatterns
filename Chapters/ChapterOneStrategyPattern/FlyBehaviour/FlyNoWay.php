<?php

namespace Chapters\ChapterOneStrategyPattern\FlyBehaviour;

class FlyNoWay implements \Chapters\ChapterOneStrategyPattern\Interfaces\IFlyBehaviour
{

    public function fly() : string
    {
        return "This type of ducks can not fly";
    }
}