<?php

namespace Tests\ChapterThree;

use Chapters\ChapterThreeDecoratorPattern\Espresso;
use Chapters\ChapterThreeDecoratorPattern\Mocha;
use PHPUnit\Framework\TestCase;

class DecoratorPatternTest extends TestCase
{
    public function testCanCreateEspressoWithMocha()
    {
        $espresso = new Espresso();
        $espressoWithMocha = new Mocha($espresso);

        $this->assertEquals(40, $espressoWithMocha->getCost());
    }

    public function testCanCreateEspressoWithDoubleMocha()
    {
        $espresso = new Espresso();
        $espressoWithSingleMocha = new Mocha($espresso);
        $espressoWithDoubleMocha = new Mocha($espressoWithSingleMocha);

        $this->assertEquals(50, $espressoWithDoubleMocha->getCost());
    }
}