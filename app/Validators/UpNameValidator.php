<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class UpNameValidator extends AbstractValidator
{
    protected string $message = 'Field :field is name';

    public function rule(): bool
    {
        $pN = $this->value;
        return preg_match("/^[А-ЯЁ]/",$pN);
    }
}