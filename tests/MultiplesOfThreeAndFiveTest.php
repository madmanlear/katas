<?php

use Kata\MultiplesOfThreeAndFive;

class MultiplesOfThreeAndFiveTest extends PHPUnit_Framework_TestCase
{
    
    public function test_class_exists()
    {
        $MultiplesOfThreeAndFive = new MultiplesOfThreeAndFive();
        $this->assertInstanceOf(MultiplesOfThreeAndFive::class, $MultiplesOfThreeAndFive);
    }

    public function test_1_returns_0()
    {
        $this->assertEquals(0, MultiplesOfThreeAndFive::execute(1));
    }

    public function test_3_returns_3()
    {
        $this->assertEquals(3, MultiplesOfThreeAndFive::execute(3));
    }

    public function test_9_returns_23()
    {
        $this->assertEquals(23, MultiplesOfThreeAndFive::execute(9));
    }

    public function test_999_returns_233168()
    {
        $this->assertEquals(233168, MultiplesOfThreeAndFive::execute(999));
    }
}
