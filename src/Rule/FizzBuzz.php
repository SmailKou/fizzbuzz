<?php

namespace App\Rule;

final class FizzBuzz implements RuleInterface
{
    public function canBeUsed(int $number): bool
    {
        return $number % 15 === 0;
    }

    public function print(int $number): string
    {
        return 'FizzBuzz';
    }
}