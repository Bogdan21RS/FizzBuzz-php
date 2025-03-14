<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{

    /**
     * @test
     */
    public function processedIntegerNotMultipleOf5or3ReturnsTheNumber()
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->processNumber(1);
        $this->assertEquals(1, $result);
    }
    /**
     * @test
     */
    public function processedIntegerMultipleOf3ReturnsFizz()
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->processNumber(3);
        $this->assertEquals("Fizz", $result);
    }

    /**
    * @test
    */
    public function processedIntegerMultipleOf5ReturnsBuzz()
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->processNumber(5);
        $this->assertEquals("Buzz", $result);
    }

    /**
     * @test
     */
    public function processedIntegerMultipleOf5And3ReturnsFizzBuzz()
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->processNumber(15);
        $this->assertEquals("FizzBuzz", $result);
    }
}
