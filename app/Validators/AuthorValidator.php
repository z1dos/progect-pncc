<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class AuthorValidator extends AbstractValidator
{
    protected string $message = 'Field :field is login';

    public function rule(): bool
    {
        $pN = $this->value;
        return preg_match("/^([А-ЯЁ]{1}[а-яё]*\s[А-ЯЁ]{1}.[А-ЯЁ]{1}.)$/u",$pN);
    }
}