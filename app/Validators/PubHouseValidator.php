<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class PubHouseValidator extends AbstractValidator
{
    protected string $message = 'Field :field is pubHouse';

    public function rule(): bool
    {
        $pN = $this->value;
        return preg_match("/^([А-ЯЁ]{1}[а-яА-Я0-9_\-\s!#]*)$/u",$pN);
    }
}