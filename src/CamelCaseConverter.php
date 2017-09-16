<?php

namespace CaseConverter;

class CamelCaseConverter implements TypeCase
{
    use LowersArrays;

    public function split(string $input): array
    {
        $matches = [];

        preg_match_all('/[0-9]+|[A-Z]+[a-z]*/', $input, $matches, PREG_OFFSET_CAPTURE);

        $words = array_column($matches[0], 0);

        if (isset($matches[0][0]) && $matches[0][0][1] > 0) {
            $firstWord = substr($input, 0, $matches[0][0][1]);
            array_unshift($words, $firstWord);
        }

        $this->lowerArray($words);

        return $words;
    }

    public function join(array $parsed): string
    {
        $firstElement = array_shift($parsed);

        array_walk($parsed, function (&$word) {
            $word = ucwords($word);
        });

        return implode('', array_merge([$firstElement], $parsed));
    }
}