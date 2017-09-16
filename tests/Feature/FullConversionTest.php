<?php

namespace CaseConverter\Tests\Feature;

use CaseConverter\CaseConverter;
use PHPUnit\Framework\TestCase;

class FullConversionTest extends TestCase
{
    /** @var CaseConverter */
    protected $converter;

    public function setUp()
    {
        $this->converter = new CaseConverter;
    }

    /** @test */
    public function it_converts_from_camel_to_studly()
    {
        $converted = $this->converter->convert('aStringWith99NumbersToConvert')
            ->from('camel')
            ->to('studly');

        $this->assertEquals('AStringWith99NumbersToConvert', $converted);
    }

    /** @test */
    public function it_converts_from_kebab_to_standard()
    {
        $converted = $this->converter->convert('a-string-with-99-numbers-to-convert')
            ->from('kebab')
            ->to('standard');

        $this->assertEquals('a string with 99 numbers to convert', $converted);
    }

    /** @test */
    public function it_converts_from_snake_to_kebab()
    {
        $converted = $this->converter->convert('a_string_with_99_numbers_to_convert')
            ->from('snake')
            ->to('kebab');

        $this->assertEquals('a-string-with-99-numbers-to-convert', $converted);
    }

    /** @test */
    public function it_converts_from_standard_to_snake()
    {
        $converted = $this->converter->convert('a string with 99 numbers to convert')
            ->from('standard')
            ->to('snake');

        $this->assertEquals('a_string_with_99_numbers_to_convert', $converted);
    }

    /** @test */
    public function it_converts_from_studly_to_camel()
    {
        $converted = $this->converter->convert('AStringWith99NumbersToConvert')
            ->from('studly')
            ->to('camel');

        $this->assertEquals('aStringWith99NumbersToConvert', $converted);
    }
}