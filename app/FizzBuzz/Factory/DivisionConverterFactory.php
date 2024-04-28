<?php

declare(strict_types=1);

namespace FizzBuzz\Factory;

use FizzBuzz\NaturalNumber;
use FizzBuzz\Result;
use FizzBuzz\Calculator\Division;
use FizzBuzz\Converter;

final class DivisionConverterFactory
{
    public static function create(string $successValue, NaturalNumber $denominator): Converter
    {
        return new Converter(new Result($successValue), new Division($denominator));
    }
}
