<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    public function processNumber(int $number): int | String
    {
        if ($number % 3 === 0 && $number % 5 === 0) {
            return "FizzBuzz";
        }
        if ($number % 3 === 0) {
            return "Fizz";
        }
        if ($number % 5 === 0) {
            return "Buzz";
        }

        return $number;
    }
}