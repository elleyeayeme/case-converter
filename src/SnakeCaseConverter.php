<?php

namespace CaseConverter;

class SnakeCaseConverter implements TypeCase
{
    public function split(string $input): array
    {
        $words = explode('_', $input);

        array_walk($words, function (&$word) {
            $word = strtolower($word);
        });

        return $words;
    }

    public function join(array $parsed): string
    {
        // TODO: Implement join() method.
    }
}