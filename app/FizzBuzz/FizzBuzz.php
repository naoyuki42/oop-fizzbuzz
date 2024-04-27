<?php

declare(strict_types=1);

namespace FizzBuzz;

use FizzBuzz\Calculator\Calculator;

final class FizzBuzz
{
    /**
     * @param Calculator[] $calculators
     */
    public function __construct(
        private readonly array $calculators,
    ) {}

    public function execute(NaturalNumber $target): string
    {
        return $this->summarize($target);
    }

    private function summarize(NaturalNumber $target): string
    {
        $summary = '';

        foreach($this->calculators as $calculator) {
            $summary .= $calculator->execute($target);
        }

        return $summary;
    }
}
