<?php

declare(strict_types=1);

namespace FizzBuzz;

use PharIo\Manifest\InvalidUrlException;

final class Result
{
    private const FAILED_VALUE = '';

    public function __construct(
        private readonly string $successValue,
    ) {
        if ($successValue === self::FAILED_VALUE) {
            throw new InvalidUrlException();
        }
    }

    public function get(bool $isSuccess): string
    {
        return $isSuccess ? $this->successValue : self::FAILED_VALUE;
    }
}
