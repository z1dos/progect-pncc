<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class CheckPhoneNumber extends AbstractValidator
{
    protected string $message = 'Field :field is phoneNumber';

    public function rule(): bool
    {
        $pN = strlen($this->value) < 13;
        return !empty($pN);
    }
}