<?php

namespace CaseConverter;

class CaseFactory
{
    public function getConverter($format)
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
        }
    }
}