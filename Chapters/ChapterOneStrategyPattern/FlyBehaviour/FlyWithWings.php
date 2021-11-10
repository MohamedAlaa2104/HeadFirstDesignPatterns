<?php

namespace Chapters\ChapterOneStrategyPattern\FlyBehaviour;

use Chapters\ChapterOneStrategyPattern\Interfaces\IFlyBehaviour;

class FlyWithWings implements IFlyBehaviour
{

    public function fly() : string
    {
        return "Real Ducks Can Fly";
    }
}