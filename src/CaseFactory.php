<?php

namespace CaseConverter;

class CaseFactory
{
    /**
     * Get the appropriate converter class.
     *
     * @param $format
     * @return TypeCase
     * @throws InvalidTypeCaseException
     */
    public function getConverter($format): TypeCase
    {
        switch ($format) {
            case 'camel':
                return new CamelCaseConverter;
                break;
            case 'snake':
                return new SnakeCaseConverter;
                break;
            case 'studly':
                return new StudlyCapsCaseConverter;
                break;
            case 'kebab':
                return new KebabCaseConverter;
                break;
            case 'standard':
                return new StandardCaseConverter;
                break;
            default:
                throw new InvalidTypeCaseException;
        }
    }
}