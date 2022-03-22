<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class NumberValidator extends AbstractValidator
{
    protected string $message = 'Field :field is numbers';

    public function rule(): bool
    {
        $pN = $this->value;
        return preg_match("/[0-9]/",$pN);
    }
}