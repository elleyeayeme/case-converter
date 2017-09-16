<?php

namespace CaseConverter;

interface TypeCase
{
    /**
     * Take the input string and split it into an array.
     *
     * @param string $input
     * @return array
     */
    public function split(string $input): array;

    /**
     * Take the split array and join it into a single string.
     *
     * @param array $parsed
     * @return string
     */
    public function join(array $parsed): string;
}