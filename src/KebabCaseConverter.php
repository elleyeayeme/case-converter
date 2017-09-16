<?php

namespace CaseConverter;

class KebabCaseConverter implements TypeCase
{
    public function split(string $input): array
    {
        $words = explode('-', $input);

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