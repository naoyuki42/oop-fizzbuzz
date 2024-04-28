<?php

declare(strict_types=1);

namespace FizzBuzz\Calculator;

use FizzBuzz\NaturalNumber;
use FizzBuzz\Result;

final class Converter
{
    public function __construct(
        private readonly Result $result,
        private readonly Calculator $calculator
    ) {}

    public function execute(NaturalNumber $targetNumber): string
    {
        return $this->result->get($this->calculator->calculate($targetNumber));
    }
}
