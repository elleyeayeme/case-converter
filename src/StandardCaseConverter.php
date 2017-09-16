<?php

namespace CaseConverter;

class StandardCaseConverter implements TypeCase
{
    use LowersArrays;

    public function split(string $input): array
    {
        $words = explode(' ', $input);

        $this->lowerArray($words);

        return $words;
    }

    public function join(array $parsed): string
    {
        return implode(' ', $parsed);
    }
}