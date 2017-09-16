<?php

namespace CaseConverter;

class CaseConverter
{
    private $inputRaw;

    private $inputArray;

    /** @var CaseFactory */
    private $factory;

    public function __construct()
    {
        $this->factory = new CaseFactory;
    }

    public function convert($input)
    {
        $this->inputRaw = $input;

        return $this;
    }

    public function getInputRaw()
    {
        return $this->inputRaw;
    }

    public function getInputArray()
    {
        return $this->inputArray;
    }

    public function from($format)
    {
        $inputConverter = $this->factory->getConverter($format);

        $this->inputArray = $inputConverter->split($this->inputRaw);

        return $this;
    }

    public function to($format)
    {
        $outputConverter = $this->factory->getConverter($format);
        
        return $outputConverter->join($this->inputArray);
    }
}