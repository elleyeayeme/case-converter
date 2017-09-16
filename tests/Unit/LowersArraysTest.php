<?php

namespace CaseConverter\Tests;

use PHPUnit\Framework\TestCase;
use CaseConverter\LowersArrays;

class LowersArraysTest extends TestCase
{
    use LowersArrays;

    /** @test */
    public function it_lowers_each_word_in_an_array()
    {
        $notLowered = ['Has', 'Not', 'BEEN', 'LOWERED'];

        $this->lowerArray($notLowered);

        $this->assertEquals(['has', 'not', 'been', 'lowered'], $notLowered);
    }
}