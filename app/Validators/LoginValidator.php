<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class LoginValidator extends AbstractValidator
{
    protected string $message = 'Field :field is login';

    public function rule(): bool
    {
        $pN = $this->value;
        return preg_match("/^[a-z0-9_]{3,16}$/",$pN);
    }
}