<?php

namespace App\Rule;

final class Buzz implements RuleInterface
{
    public function canBeUsed(int $number): bool
    {
        return $number % 5 === 0;
    }

    public function print(int $number): string
    {
        return 'Buzz';
    }
}