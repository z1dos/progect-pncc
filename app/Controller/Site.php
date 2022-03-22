<?php

namespace Controller;

use Model\Post;
use Model\User;
use Src\Validator\Validator;
use Src\View;
use Src\Request;
use Src\Auth\Auth;

class Site
{
    public function index(Request $request): string
    {
        $posts = Post::all();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'surname' => ['required', 'nameVal'],
                'name' => ['required', 'nameVal'],
                'patronymic' => ['required', 'nameVal'],
                'address' => ['required', 'addressCheck'],
                'phone_number' => ['phoneNumber', 'required'],
                'login' => ['required', 'loginRegex','unique:users,login'],
                'password' => ['required', 'PasswordRegex'],
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально',
                'phoneNumber' => 'Поле :field должно начинаться с +7 и равно 12 символам',
                'nameVal' => 'Поле :field должно начинаться с большой буквы',
                'addressCheck' => 'Поле :field должно записываться в форме АдресНомер',
                'loginRegex' => 'В поле :field можно использовать строчные буквы, цифры, символ _. Длина от 3 до 16 символов',
                'PasswordRegex' => 'В поле :field можно использовать строчные буквы, цифры, символы _ -. Длина от 5 до 20 символов',
            ]);

            if($validator->fails()){
                return new View('site.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }

            if (User::create($request->all())) {
                app()->route->redirect('/login');
            }
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }
}
