<?php

declare(strict_types=1);

namespace FizzBuzz\Calculator;

use FizzBuzz\NaturalNumber;
use FizzBuzz\Result;

class Division extends Calculator
{
    private const SUCCESS_VALUE = 0;

    public function __construct(
        private readonly Result $result,
        private readonly NaturalNumber $denominator,
    ) {
        parent::__construct($result);
    }

    protected function calculate(NaturalNumber $targetNumber): bool
    {
        $remainder = $targetNumber->value % $this->denominator->value;

        return $remainder === self::SUCCESS_VALUE;
    }
}
