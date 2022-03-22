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
    'validators' => [
        'required' => \Validators\RequireValidator::class,
        'unique' => \Validators\UniqueValidator::class,
        'phoneNumber' => \Validators\CheckPhoneNumber::class,
        'nameVal' => \Validators\UpNameValidator::class,
        'addressCheck' => \Validators\AddressValidator::class,
    ]
];
