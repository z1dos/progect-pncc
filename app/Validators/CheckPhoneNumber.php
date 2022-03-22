<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class CheckPhoneNumber extends AbstractValidator
{
    protected string $message = 'Field :field is phoneNumber';

    public function rule(): bool
    {
        $pN = $this->value;
        return preg_match("/^\+?7(\d{10})$/",$pN);
    }
}