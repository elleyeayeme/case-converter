<?php

namespace CaseConverter;

class StudlyCapsCaseConverter implements TypeCase
{
    use LowersArrays;

    public function split(string $input): array
    {
        $matches = [];

        preg_match_all('/[0-9]+|[A-Z][a-z]*/', $input, $matches, PREG_OFFSET_CAPTURE);

        $words = array_column($matches[0], 0);

        $this->lowerArray($words);

        return $words;
    }

    public function join(array $parsed): string
    {
        array_walk($parsed, function (&$word) {
            $word = ucwords($word);
        });

        return implode('', $parsed);
    }
}