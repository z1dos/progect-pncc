<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class PasswordValidator extends AbstractValidator
{
    protected string $message = 'Field :field is login';

    public function rule(): bool
    {
        $pN = $this->value;
        return preg_match("/^[a-z0-9_-]{5,20}$/",$pN);
    }
}