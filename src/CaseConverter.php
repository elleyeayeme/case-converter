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

    /**
     * Store the input string for manipulation.
     *
     * @param string $input
     * @return CaseConverter
     */
    public function convert(string $input): self
    {
        $this->inputRaw = $input;

        return $this;
    }

    /**
     * Return the input string.
     *
     * @return string
     */
    public function getInputRaw(): string
    {
        return $this->inputRaw;
    }

    /**
     * Return the split input.
     *
     * @return array
     */
    public function getInputArray(): array
    {
        return $this->inputArray;
    }

    /**
     * Set the appropriate input converter class, and split the input.
     *
     * @param string $format
     * @return CaseConverter
     * @throws RawInputNotProvidedException
     */
    public function from(string $format): self
    {
        if (! isset($this->inputRaw)) {
            throw new RawInputNotProvidedException;
        }

        $inputConverter = $this->factory->getConverter($format);

        $this->inputArray = $inputConverter->split($this->inputRaw);

        return $this;
    }

    /**
     * Set the appropriate output converter class, and return the formatted output.
     *
     * @param string $format
     * @return string
     * @throws InputTypeNotSelectedException
     */
    public function to(string $format): string
    {
        if (! isset($this->inputArray)) {
            throw new InputTypeNotSelectedException;
        }

        $outputConverter = $this->factory->getConverter($format);
        
        return $outputConverter->join($this->inputArray);
    }
}