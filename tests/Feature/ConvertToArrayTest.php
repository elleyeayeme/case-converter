<?php

namespace CaseConverter\Tests;

use CaseConverter\CaseConverter;
use PHPUnit\Framework\TestCase;

class ConvertToArrayTest extends TestCase
{
    /** @var CaseConverter */
    protected $converter;

    public function setUp()
    {
        parent::setUp();

        $this->converter = new CaseConverter;
    }

    /** @test */
    public function it_converts_camel_case_to_an_array()
    {
        $converted = $this->converter->convert('aStringToConvert')
            ->from('camel');

        $this->assertEquals(['a', 'string', 'to', 'convert'], $converted->getInputArray());
    }

    /** @test */
    public function it_converts_kebab_case_to_an_array()
    {
        $converted = $this->converter->convert('a-string-to-convert')
            ->from('kebab');

        $this->assertEquals(['a', 'string', 'to', 'convert'], $converted->getInputArray());
    }
}