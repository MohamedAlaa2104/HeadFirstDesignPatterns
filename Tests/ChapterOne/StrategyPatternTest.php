<?php

namespace Tests\ChapterOne;

use Chapters\ChapterOneStrategyPattern\FlyBehaviour\FlyNoWay;
use Chapters\ChapterOneStrategyPattern\FlyBehaviour\FlyWithWings;
use Chapters\ChapterOneStrategyPattern\Modules\Duck;
use Chapters\ChapterOneStrategyPattern\Modules\MallardDuck;
use Chapters\ChapterOneStrategyPattern\Modules\RubberDuck;
use Chapters\ChapterOneStrategyPattern\QuackBehaviour\Quack;
use Chapters\ChapterOneStrategyPattern\QuackBehaviour\Squeak;
use PHPUnit\Framework\TestCase;

class StrategyPatternTest extends TestCase
{
    //Mallard Duck
    public function testCanCreateMallardDuck()
    {
        $duck = new MallardDuck();
        $this->assertInstanceOf(Duck::class, $duck);
    }

    public function testMallardDuckCanPerformQuack()
    {
        $quackBehaviour = new Quack();
        $duck = new MallardDuck();
        $duck->setQuackBehaviour($quackBehaviour);

        $this->assertEquals("Real Duck Quacks", $duck->performQuack());
    }

    public function testMallardDuckCanPerformFly()
    {
        $flyBehaviour = new FlyWithWings();
        $duck = new MallardDuck();
        $duck->setFlyBehaviour($flyBehaviour);

        $this->assertEquals("Real Ducks Can Fly", $duck->performFly());
    }


    //Rubber Duck
    public function testCanCreateRubberDuck()
    {
        $duck = new RubberDuck();
        $this->assertInstanceOf(Duck::class, $duck);
    }

    public function testRubberDuckCanPerformQuack()
    {
        $quackBehaviour = new Squeak();
        $duck = new RubberDuck();
        $duck->setQuackBehaviour($quackBehaviour);

        $this->assertEquals("Rubber Duck Squeak", $duck->performQuack());
    }

    public function testRubberDuckCanPerformFly()
    {
        $flyBehaviour = new FlyNoWay();
        $duck = new RubberDuck();
        $duck->setFlyBehaviour($flyBehaviour);

        $this->assertEquals("This type of ducks can not fly", $duck->performFly());
    }
}