<?php

declare(strict_types=1);

namespace FizzBuzz\Calculator;

use FizzBuzz\NaturalNumber;

class Addition implements Calculator
{
    public function __construct(
        private readonly NaturalNumber $addingNumber,
        private readonly NaturalNumber $successNumber,
    ) {}

    public function calculate(NaturalNumber $targetNumber): bool
    {
        $addedNumber = $targetNumber->add($this->addingNumber);

        return $addedNumber->equals($this->successNumber);
    }
}
