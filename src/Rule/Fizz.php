<?php

namespace App\Rule;

final class Fizz implements RuleInterface
{
    public function canBeUsed(int $number): bool
    {
        return $number % 3 === 0;
    }

    public function print(int $number): string
    {
        return 'Fizz';
    }
}