<?php

declare(strict_types=1);

namespace FizzBuzz\Calculator;

use FizzBuzz\NaturalNumber;
use FizzBuzz\Result;

class Addition extends Calculator
{
    private const SUCCESS_VALUE = 10;

    public function __construct(
        private readonly Result $result,
        private readonly NaturalNumber $addingNumber,
    ) {
        parent::__construct($result);
    }

    protected function calculate(NaturalNumber $targetNumber): bool
    {
        $addedNumber = $targetNumber->value + $this->addingNumber->value;

        return $addedNumber === self::SUCCESS_VALUE;
    }
}
