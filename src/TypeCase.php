<?php

namespace CaseConverter;

interface TypeCase
{
    public function split(string $input): array;

    public function join(array $parsed): string;
}