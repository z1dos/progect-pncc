<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class UpNameValidator extends AbstractValidator
{
    protected string $message = 'Field :field is login';

    public function rule(): bool
    {
        $pN = $this->value;
        return preg_match("/[А-Я]/",$pN);
    }
}