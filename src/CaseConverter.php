<?php

namespace CaseConverter;

class CaseConverter
{
    private $inputRaw;

    private $inputArray;

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
        $factory = new CaseFactory;
        $inputConverter = $factory->getConverter($format);

        $this->inputArray = $inputConverter->split($this->inputRaw);

        return $this;
    }
}