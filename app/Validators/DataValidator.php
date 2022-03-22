<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class DataValidator extends AbstractValidator
{
    protected string $message = 'Field :field is login';

    public function rule(): bool
    {
        $pN = $this->value;
        return preg_match("/\d\d\d\d-\d\d-\d\d/",$pN);
    }
}