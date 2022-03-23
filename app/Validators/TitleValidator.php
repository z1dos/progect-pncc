<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class TitleValidator extends AbstractValidator
{
    protected string $message = 'Field :field is title';

    public function rule(): bool
    {
        $pN = $this->value;
        return preg_match("/^([А-ЯЁ]{1}[а-яА-Я0-9\-\s]*)$/u",$pN);
    }
}