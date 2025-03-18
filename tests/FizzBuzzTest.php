<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    private fizzBuzz $fizzBuzz;

    protected function setUp(): void
    {
        parent::setUp();

        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @test
     */
    public function numberNotMultipleOfBuzzNumberOrFizzNumberReturnsTheNumber(): void
    {
        $result = $this->fizzBuzz->processNumber(1);
        $this->assertEquals(1, $result);
    }
    /**
     * @test
     */
    public function numberMultipleOfFizzNumberReturnsFizz(): void
    {
        $result = $this->fizzBuzz->processNumber(3);
        $this->assertEquals("Fizz", $result);
    }

    /**
    * @test
    */
    public function numberMultipleOfBuzzNumberReturnsBuzz(): void
    {
        $result = $this->fizzBuzz->processNumber(5);
        $this->assertEquals("Buzz", $result);
    }

    /**
     * @test
     */
    public function numberMultipleOfBuzzNumberAndFizzNumberReturnsFizzBuzz(): void
    {
        $result = $this->fizzBuzz->processNumber(15);
        $this->assertEquals("FizzBuzz", $result);
    }

    /**
     * @test
     */
    public function numberThatHasFizzNumberReturnsFizz(): void
    {
        $result = $this->fizzBuzz->processNumber(132);
        $this->assertEquals("Fizz", $result);
    }

    /**
     * @test
     */
    public function numberThatHasBuzzNumberReturnsBuzz(): void
    {
        $result = $this->fizzBuzz->processNumber(2551);
        $this->assertEquals("Buzz", $result);
    }


}
