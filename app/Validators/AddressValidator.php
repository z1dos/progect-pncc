<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class AddressValidator extends AbstractValidator
{
    protected string $message = 'Field :field is address';

    public function rule(): bool
    {
        $pN = $this->value;
        return preg_match("/^([А-ЯЁ]{1}[а-яА-Я0-9_\-\s]*)$/u",$pN);
    }
}