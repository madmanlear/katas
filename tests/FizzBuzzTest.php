<?php

use Kata\FizzBuzz;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    
    public function test_class_exists()
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertInstanceOf(FizzBuzz::class, $fizzBuzz);
    }

    public function test_1_returns_1()
    {
        $this->assertEquals(1, FizzBuzz::execute(1));
    }

    public function test_2_returns_2()
    {
        $this->assertEquals(2, FizzBuzz::execute(2));
    }

    public function test_3_returns_fizz()
    {
        $this->assertEquals('fizz', FizzBuzz::execute(3));
    }

    public function test_5_returns_buzz()
    {
        $this->assertEquals('buzz', FizzBuzz::execute(5));
    }

    public function test_15_returns_fizzbuzz()
    {
        $this->assertEquals('fizzbuzz', FizzBuzz::execute(15));
    }
}
