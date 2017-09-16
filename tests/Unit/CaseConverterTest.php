<?php

namespace CaseConverter\Tests;

use CaseConverter\CaseConverter;
use PHPUnit\Framework\TestCase;

class CaseConverterTest extends TestCase
{
    /** @var CaseConverter */
    protected $converter;

    public function setUp()
    {
        parent::setUp();

        $this->converter = new CaseConverter;
    }

    /** @test */
    public function it_sets_and_gets_the_raw_input()
    {
        $this->converter->convert('aStringToConvert');

        $this->assertEquals('aStringToConvert', $this->converter->getInputRaw());
    }
}