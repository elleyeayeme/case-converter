<?php

namespace CaseConverter;

class SnakeCaseConverter implements TypeCase
{
    use LowersArrays;

    public function split(string $input): array
    {
        $words = explode('_', $input);

        $this->lowerArray($words);

        return $words;
    }

    public function join(array $parsed): string
    {
        // TODO: Implement join() method.
    }
}