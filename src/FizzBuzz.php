<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    private const FIZZ_NUMBER = 3;
    private const BUZZ_NUMBER = 5;
    public function processNumber(int $number): int | String
    {
        if ($this->isFizzBuzz($number)) {
            return "FizzBuzz";
        }
        if ($this->isFizz($number)) {
            return "Fizz";
        }
        if ($this->isBuzz($number)) {
            return "Buzz";
        }

        return $number;
    }

    private function numberHasThree(int $number): string
    {
        $numberInString = strval($number);
        $neededContainingString = strval();

        if (str_contains($numberInString, $neededContainingString)) {
            return "Fizz";
        }
        return "";
    }

    private function numberHasFive(int $number): string
    {
        $numberInString = strval($number);
        $neededContainingString = strval(FIZZ_NUMBER);

        if (str_contains($numberInString, $neededContainingString)) {
            return "Buzz";
        }
        return "";
    }

    /**
     * @param int $number
     * @return bool
     */
    public function isFizzBuzz(int $number): bool
    {
        return $number % FIZZ_NUMBER === 0 && $number % 5 === 0;
    }

    /**
     * @param int $number
     * @return bool
     */
    public function isFizz(int $number): bool
    {
        return $number % FIZZ_NUMBER === 0 || $this->numberHasThree($number);
    }

    /**
     * @param int $number
     * @return bool
     */
    public function isBuzz(int $number): bool
    {
        return $number % FIZZ_NUMBER === 0 || $this->numberHasFive($number);
    }
}