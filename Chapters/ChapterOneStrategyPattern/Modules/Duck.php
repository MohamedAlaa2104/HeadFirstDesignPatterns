<?php

namespace Chapters\ChapterOneStrategyPattern\Modules;

use Chapters\ChapterOneStrategyPattern\Interfaces\IFlyBehaviour;
use Chapters\ChapterOneStrategyPattern\Interfaces\IQuackBehaviour;

abstract class Duck
{

    protected IFlyBehaviour $flyBehaviour;
    protected IQuackBehaviour $quackBehaviour;

    public function swim() : string
    {
        return "All ducks can swim";
    }

    public function display() : string
    {
        return "All ducks display";
    }

    public function performQuack()
    {
        return $this->quackBehaviour->quack();
    }

    public function performFly()
    {
        return $this->flyBehaviour->fly();
    }

    public function setQuackBehaviour(IQuackBehaviour $quackBehaviour) : void
    {
        $this->quackBehaviour = $quackBehaviour;
    }

    public function setFlyBehaviour(IFlyBehaviour $flyBehaviour) : void
    {
        $this->flyBehaviour = $flyBehaviour;
    }
}