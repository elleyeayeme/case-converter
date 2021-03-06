<?php

namespace CaseConverter\Tests\Unit;

use CaseConverter\CaseConverter;
use PHPUnit\Framework\TestCase;

class CaseConverterTest extends TestCase
{
    /** @var CaseConverter */
    protected $converter;

    /** @var  CaseConverter */
    protected $loadedConverter;

    protected $convertedArray = ['a', 'string', 'with', '99', 'numbers', 'to', 'convert'];

    public function setUp()
    {
        parent::setUp();

        $this->converter = new CaseConverter;

        $this->loadedConverter = (new CaseConverter)->convert('A String To Convert')
            ->from('standard');
    }

    /** @test */
    public function it_sets_and_gets_the_raw_input()
    {
        $this->converter->convert('aStringToConvert');

        $this->assertEquals('aStringToConvert', $this->converter->getInputRaw());
    }

    /** @test */
    public function it_converts_from_camel_case_to_an_array()
    {
        $converted = $this->converter->convert('aStringWith99NumbersToConvert')->from('camel');

        $this->assertEquals($this->convertedArray, $converted->getInputArray());
    }

    /** @test */
    public function it_converts_from_kebab_case_to_an_array()
    {
        $converted = $this->converter->convert('A-String-With-99-Numbers-To-Convert')->from('kebab');

        $this->assertEquals($this->convertedArray, $converted->getInputArray());
    }

    /** @test */
    public function it_converts_from_snake_case_to_an_array()
    {
        $converted = $this->converter->convert('A_String_With_99_Numbers_To_Convert')->from('snake');

        $this->assertEquals($this->convertedArray, $converted->getInputArray());
    }

    /** @test */
    public function it_converts_from_standard_case_to_an_array()
    {
        $converted = $this->converter->convert('A String With 99 Numbers To Convert')->from('standard');

        $this->assertEquals($this->convertedArray, $converted->getInputArray());
    }

    /** @test */
    public function it_converts_from_studly_caps_case_to_an_array()
    {
        $converted = $this->converter->convert('AStringWith99NumbersToConvert')->from('studly');

        $this->assertEquals($this->convertedArray, $converted->getInputArray());
    }

    /** @test */
    public function it_converts_from_an_array_to_camel_case()
    {
        $converted = $this->loadedConverter->to('camel');

        $this->assertEquals('aStringToConvert', $converted);
    }

    /** @test */
    public function it_converts_from_an_array_to_kebab_case()
    {
        $converted = $this->loadedConverter->to('kebab');

        $this->assertEquals('a-string-to-convert', $converted);
    }

    /** @test */
    public function it_converts_from_an_array_to_snake_case()
    {
        $converted = $this->loadedConverter->to('snake');

        $this->assertEquals('a_string_to_convert', $converted);
    }

    /** @test */
    public function it_converts_from_an_array_to_standard_case()
    {
        $converted = $this->loadedConverter->to('standard');

        $this->assertEquals('a string to convert', $converted);
    }

    /** @test */
    public function it_converts_from_an_array_to_studly_caps_case()
    {
        $converted = $this->loadedConverter->to('studly');

        $this->assertEquals('AStringToConvert', $converted);
    }
}