<?php

declare(strict_types=1);

namespace FizzBuzz;

use FizzBuzz\Calculator\Converter;

final class FizzBuzz
{
    /**
     * @param Converter[] $converters
     */
    public function __construct(
        private readonly array $converters,
    ) {}

    public function execute(NaturalNumber $target): string
    {
        return $this->summarize($target);
    }

    private function summarize(NaturalNumber $target): string
    {
        $summary = '';

        foreach($this->converters as $converter) {
            $summary .= $converter->execute($target);
        }

        return $summary;
    }
}
