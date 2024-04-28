<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use FizzBuzz\Calculator\Addition;
use PHPUnit\Framework\TestCase;
use FizzBuzz\FizzBuzz;
use FizzBuzz\Result;
use FizzBuzz\NaturalNumber;
use FizzBuzz\Calculator\Division;
use FizzBuzz\Calculator\Converter;

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
                    new Converter(new Result('Fizz'), new Division(new NaturalNumber(3))),
                    new Converter(new Result('Buzz'), new Division(new NaturalNumber(5))),
                ],
                new NaturalNumber(15),
                'FizzBuzz',
            ],
            [
                [
                    new Converter(new Result('Cookie'), new Division(new NaturalNumber(2))),
                    new Converter(new Result('Chocolate'), new Division(new NaturalNumber(7))),
                ],
                new NaturalNumber(15),
                '',
            ],
            [
                [
                    new Converter(new Result('Fruits'), new Addition(new NaturalNumber(2),  new NaturalNumber(5))),
                    new Converter(new Result('Beef'), new Addition(new NaturalNumber(7),  new NaturalNumber(11))),
                ],
                new NaturalNumber(3),
                'Fruits',
            ],
        ];
    }
}
