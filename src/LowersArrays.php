<?php

namespace CaseConverter;

trait LowersArrays
{
    public function lowerArray(&$words)
    {
        array_walk($words, function (&$word) {
            $word = strtolower($word);
        });
    }
}
