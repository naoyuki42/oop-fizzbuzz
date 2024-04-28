<?php

declare(strict_types=1);

namespace FizzBuzz\Calculator;

use FizzBuzz\NaturalNumber;

class Division implements Calculator
{
    private const SUCCESS_VALUE = 0;

    public function __construct(
        private readonly NaturalNumber $denominator,
    ) {}

    public function calculate(NaturalNumber $targetNumber): bool
    {
        $remainder = $targetNumber->value % $this->denominator->value;

        return $remainder === self::SUCCESS_VALUE;
    }
}
