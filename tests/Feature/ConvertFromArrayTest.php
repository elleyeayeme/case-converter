<?php

namespace CaseConverter\Tests;

use CaseConverter\CaseConverter;
use PHPUnit\Framework\TestCase;

class ConvertFromArrayTest extends TestCase
{
    /** @var CaseConverter */
    protected $converter;

    public function setUp()
    {
        parent::setUp();

        $this->converter = (new CaseConverter)->convert('A String To Convert')
            ->from('standard');
    }

    /** @test */
    public function it_converts_from_an_array_to_camel_case()
    {
        $converted = $this->converter->to('camel');

        $this->assertEquals('aStringToConvert', $converted);
    }

    /** @test */
    public function it_converts_from_an_array_to_kebab_case()
    {
        $converted = $this->converter->to('kebab');

        $this->assertEquals('a-string-to-convert', $converted);
    }

    /** @test */
    public function it_converts_from_an_array_to_snake_case()
    {
        $converted = $this->converter->to('snake');

        $this->assertEquals('a_string_to_convert', $converted);
    }

    /** @test */
    public function it_converts_from_an_array_to_standard_case()
    {
        $converted = $this->converter->to('standard');

        $this->assertEquals('a string to convert', $converted);
    }

    /** @test */
    public function it_converts_from_an_array_to_studly_caps_case()
    {
        $converted = $this->converter->to('studly');

        $this->assertEquals('AStringToConvert', $converted);
    }
}