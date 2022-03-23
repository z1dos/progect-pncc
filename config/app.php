<?php
return [
    //Класс аутентификации
    'auth' => \Src\Auth\Auth::class,
    //Клас пользователя
    'identity' => \Model\User::class,
    //Классы для middleware
    'routeMiddleware' => [
        'auth' => \Middlewares\AuthMiddleware::class,
        'isAdmin' => \Middlewares\IsAdminMiddleware::class,
    ],
    'routeAppMiddleware' => [
        'trim' => \Middlewares\TrimMiddleware::class,
        'specialChars' => \Middlewares\SpecialCharsMiddleware::class,
        'csrf' => \Middlewares\CSRFMiddleware::class,
    ],
    'validators' => [
        'required' => \Validators\RequireValidator::class,
        'unique' => \Validators\UniqueValidator::class,
        'phoneNumber' => \Validators\CheckPhoneNumber::class,
        'nameVal' => \Validators\UpNameValidator::class,
        'addressCheck' => \Validators\AddressValidator::class,
        'loginRegex' => \Validators\LoginValidator::class,
        'AuthorRegex' => \Validators\AuthorValidator::class,
        'PasswordRegex' => \Validators\PasswordValidator::class,
        'DataRegex' => \Validators\DataValidator::class,
        'NumberRegex' => \Validators\NumberValidator::class,
        'D-onValidator' => \Validators\DonValidator::class,
    ]
];
