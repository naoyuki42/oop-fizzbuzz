<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use FizzBuzz\Calculator\Addition;
use PHPUnit\Framework\TestCase;
use FizzBuzz\FizzBuzz;
use FizzBuzz\Result;
use FizzBuzz\NaturalNumber;
use FizzBuzz\Calculator\Division;

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
                    new Division(new Result('Fizz'), new NaturalNumber(3)),
                    new Division(new Result('Buzz'), new NaturalNumber(5)),
                ],
                new NaturalNumber(15),
                'FizzBuzz',
            ],
            [
                [
                    new Division(new Result('Cookie'), new NaturalNumber(2)),
                    new Division(new Result('Chocolate'), new NaturalNumber(7)),
                ],
                new NaturalNumber(15),
                '',
            ],
            [
                [
                    new Addition(new Result('Fruits'), new NaturalNumber(2),  new NaturalNumber(5)),
                    new Addition(new Result('Beef'), new NaturalNumber(7), new NaturalNumber(11)),
                ],
                new NaturalNumber(3),
                'Fruits',
            ],
        ];
    }
}
