<?php

declare(strict_types=1);

namespace FizzBuzz;

use InvalidArgumentException;

final class NaturalNumber
{
    public function __construct(
        public readonly int $value,
    ) {
        if ($value <= 0) {
            throw new InvalidArgumentException();
        }
    }

    public function equals(NaturalNumber $target): bool
    {
        return $this->value === $target->value;
    }

    public function add(NaturalNumber $target): self
    {
        return new self($this->value + $target->value);
    }
}
