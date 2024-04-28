<?php

declare(strict_types=1);

namespace FizzBuzz;

use FizzBuzz\Converter;

final class FizzBuzz
{
    /**
     * @param Converter[] $converters
     */
    public function __construct(
        private readonly array $converters,
    ) {}

    public function execute(NaturalNumber $targetNumber): string
    {
        return $this->summarize($targetNumber);
    }

    private function summarize(NaturalNumber $targetNumber): string
    {
        $summary = '';

        foreach($this->converters as $converter) {
            $summary .= $converter->convert($targetNumber);
        }

        return $summary;
    }
}
