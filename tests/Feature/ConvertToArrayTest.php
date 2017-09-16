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
        $converted = $this->converter->convert('aStringToConvert')->from('camel');

        $this->assertEquals(['a', 'string', 'to', 'convert'], $converted->getInputArray());
    }

    /** @test */
    public function it_converts_kebab_case_to_an_array()
    {
        $converted = $this->converter->convert('A-String-To-Convert')->from('kebab');

        $this->assertEquals(['a', 'string', 'to', 'convert'], $converted->getInputArray());
    }

    /** @test */
    public function it_converts_snake_case_to_an_array()
    {
        $converted = $this->converter->convert('A_String_To_Convert')->from('snake');

        $this->assertEquals(['a', 'string', 'to', 'convert'], $converted->getInputArray());
    }

    /** @test */
    public function it_converts_standard_case_to_an_array()
    {
        $converted = $this->converter->convert('A String To Convert')->from('standard');

        $this->assertEquals(['a', 'string', 'to', 'convert'], $converted->getInputArray());
    }

    /** @test */
    public function it_converts_studly_caps_case_to_an_array()
    {
        $converted = $this->converter->convert('AStringToConvert')->from('studly');

        $this->assertEquals(['a', 'string', 'to', 'convert'], $converted->getInputArray());
    }
}
