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

## Supported Formats

The formats supported at present are:

- Camel case (helloWorld)
- Kebab case (hello-world)
- Snake case (hello_world)
- Studly caps (HelloWorld)
- Standard text (hello world)

## License

Case Converter is licensed under the MIT license.