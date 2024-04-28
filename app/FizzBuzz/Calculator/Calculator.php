<?php

declare(strict_types=1);

namespace FizzBuzz\Calculator;

use FizzBuzz\NaturalNumber;

interface Calculator
{
    public function calculate(NaturalNumber $targetNumber): bool;
}
