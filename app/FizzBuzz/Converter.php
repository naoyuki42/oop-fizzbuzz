<?php

declare(strict_types=1);

namespace FizzBuzz;

use FizzBuzz\NaturalNumber;
use FizzBuzz\Result;
use FizzBuzz\Calculator\Calculator;

final class Converter
{
    public function __construct(
        private readonly Result $result,
        private readonly Calculator $calculator
    ) {}

    public function convert(NaturalNumber $targetNumber): string
    {
        return $this->result->get($this->calculator->calculate($targetNumber));
    }
}
