<?php

declare(strict_types=1);

namespace FizzBuzz\Factory;

use FizzBuzz\Calculator\Addition;
use FizzBuzz\NaturalNumber;
use FizzBuzz\Result;
use FizzBuzz\Converter;

final class AdditionConverterFactory
{
    public static function create(string $successValue, NaturalNumber $addingNumber, NaturalNumber $successNumber): Converter
    {
        return new Converter(new Result($successValue), new Addition($addingNumber, $successNumber));
    }
}
