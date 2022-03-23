<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class DonValidator extends AbstractValidator
{
    protected string $message = 'Field :field is d-on';

    public function rule(): bool
    {
        $pN = $this->value;
        return preg_match("/^([А-ЯЁ]{1}[а-яА-Я0-9_\-\s]*.)$/u",$pN);
    }
}