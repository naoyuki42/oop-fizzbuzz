<?php

declare(strict_types=1);

namespace FizzBuzz\Calculator;

use FizzBuzz\NaturalNumber;
use FizzBuzz\Result;

class Addition extends Calculator
{
    public function __construct(
        private readonly Result $result,
        private readonly NaturalNumber $addingNumber,
        private readonly NaturalNumber $successNumber,
    ) {
        parent::__construct($result);
    }

    protected function calculate(NaturalNumber $targetNumber): bool
    {
        $addedNumber = $targetNumber->add($this->addingNumber);

        return $addedNumber->equals($this->successNumber);
    }
}
