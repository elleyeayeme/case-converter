<?php

namespace CaseConverter;

class StudlyCapsCaseConverter implements TypeCase
{
    public function split(string $input): array
    {
        $matches = [];

        preg_match_all('/[A-Z][a-z]*/', $input, $matches, PREG_OFFSET_CAPTURE);

        $words = array_column($matches[0], 0);

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