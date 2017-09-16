# Case Converter

This package allows strings in any of the popular formats (e.g. camel case and snake case) to be converted between one another.

## Installation

Install the latest version with:

```bash
composer require elleyeayeme/case-converter 
```

## Basic Usage

```php
<?php

use CaseConverter\CaseConverter;

$converter = new CaseConverter;

// Outputs a_string_with_99_numbers
echo $converter->convert('aStringWith99Numbers')
    ->from('camel')
    ->to('snake');
```

See the Supported Formats section for a list of the tokens to pass to `from()` and `to()` for conversion.

## Supported Formats

The formats supported at present are:

- Camel case (token: `camel`) i.e. thisIsCamelCase
- Kebab case (token: `kebab`) i.e. this-is-kebab-case
- Snake case (token: `snake`) i.e. this_is_snake_case
- Studly caps (token: `studly`) i.e. ThisIsStudlyCaps
- Standard text (token: `standard`) i.e. this is standard text

## License

Case Converter is licensed under the MIT license.