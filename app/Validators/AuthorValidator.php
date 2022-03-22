<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class AuthorValidator extends AbstractValidator
{
    protected string $message = 'Field :field is login';

    public function rule(): bool
    {
        $pN = $this->value;
        return preg_match("/[А-Я]*\.[А-Я]\.[А-Я]/",$pN);
    }
}