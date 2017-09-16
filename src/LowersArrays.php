<?php

namespace CaseConverter;

trait LowersArrays
{
    /**
     * Set each word in the array to lowercase.
     *
     * @param $words
     */
    public function lowerArray(&$words)
    {
        array_walk($words, function (&$word) {
            $word = strtolower($word);
        });
    }
}
