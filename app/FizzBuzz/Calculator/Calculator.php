<?php

declare(strict_types=1);

namespace FizzBuzz\Calculator;

use FizzBuzz\NaturalNumber;
use FizzBuzz\Result;

abstract class Calculator
{
    public function __construct(
        private readonly Result $result,
    ) {}

    public function execute(NaturalNumber $targetNumber): string
    {
        return $this->result->get($this->calculate($targetNumber));
    }

    abstract protected function calculate(NaturalNumber $targetNumber): bool;
}
