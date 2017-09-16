<?php

namespace CaseConverter\Tests\Unit;

use CaseConverter\CamelCaseConverter;
use CaseConverter\CaseFactory;
use CaseConverter\KebabCaseConverter;
use CaseConverter\SnakeCaseConverter;
use CaseConverter\StandardCaseConverter;
use CaseConverter\StudlyCapsCaseConverter;
use CaseConverter\TypeCase;
use PHPUnit\Framework\TestCase;

class CaseFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_the_correct_converter_class()
    {
        $factory = new CaseFactory;

        $converters = [
            'camel' => $factory->getConverter('camel'),
            'snake' => $factory->getConverter('snake'),
            'studly' => $factory->getConverter('studly'),
            'kebab' => $factory->getConverter('kebab'),
            'standard' => $factory->getConverter('standard'),
        ];

        foreach ($converters as $converter) {
            $this->assertInstanceOf(TypeCase::class, $converter);
        }

        $this->assertInstanceOf(CamelCaseConverter::class, $converters['camel']);
        $this->assertInstanceOf(SnakeCaseConverter::class, $converters['snake']);
        $this->assertInstanceOf(StudlyCapsCaseConverter::class, $converters['studly']);
        $this->assertInstanceOf(KebabCaseConverter::class, $converters['kebab']);
        $this->assertInstanceOf(StandardCaseConverter::class, $converters['standard']);
    }
}