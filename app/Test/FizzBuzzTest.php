<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use FizzBuzz\FizzBuzz;
use FizzBuzz\NaturalNumber;
use FizzBuzz\Factory\AdditionConverterFactory;
use FizzBuzz\Factory\DivisionConverterFactory;

class FizzBuzzTest extends TestCase
{
    /**
     * @dataProvider dataProviderExecute
     *
     * @param Calculator[] $calculators
     * @param string $expected
     */
    public function testExecute(array $calculators, NaturalNumber $targetNumber, string $expected): void
    {
        $fizzBuzz = new FizzBuzz($calculators);

        $this->assertSame($expected, $fizzBuzz->execute($targetNumber));
    }

    public static function dataProviderExecute(): array
    {
        return [
            [
                [
                    DivisionConverterFactory::create('Fizz', new NaturalNumber(3)),
                    DivisionConverterFactory::create('Buzz', new NaturalNumber(5)),
                ],
                new NaturalNumber(15),
                'FizzBuzz',
            ],
            [
                [
                    DivisionConverterFactory::create('Cookie', new NaturalNumber(2)),
                    DivisionConverterFactory::create('Chocolate', new NaturalNumber(7)),
                ],
                new NaturalNumber(15),
                '',
            ],
            [
                [
                    AdditionConverterFactory::create('Fruits', new NaturalNumber(2),  new NaturalNumber(5)),
                    AdditionConverterFactory::create('Beef', new NaturalNumber(7),  new NaturalNumber(11)),
                ],
                new NaturalNumber(3),
                'Fruits',
            ],
        ];
    }
}
