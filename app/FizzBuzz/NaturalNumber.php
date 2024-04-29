<?php

declare(strict_types=1);

namespace FizzBuzz;

use InvalidArgumentException;

final class NaturalNumber
{
    private const LOWER_LIMIT = 0;

    public function __construct(
        public readonly int $value,
    ) {
        if ($value <= self::LOWER_LIMIT) {
            throw new InvalidArgumentException();
        }
    }
}
