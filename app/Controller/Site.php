<?php

namespace Controller;

use Model\Books;
use Model\LibraryCard;
use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;

class Site
{
    public function index(Request $request): string
    {
        $posts = Post::all();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function books(Request $request): string
    {
        $books = Books::all();
        return (new View())->render('site.books', ['books' => $books]);
    }

    public function showUsers(Request $request): string
    {
        $users = User::all();
        return (new View())->render('site.showUsers', ['users' => $users]);
    }

    public function addBooks(Request $request): string
    {
        if ($request->method === 'POST' && Books::create($request->all())) {
            app()->route->redirect('/books');
        }
        return new View('site.addBook');
    }

    public function addInLibraryCard(Request $request): string
    {
        $users = User::all();
        $books = Books::all();
        $library_cards = LibraryCard::all();
        if ($request->method === 'POST' && LibraryCard::create($request->all())) {
            app()->route->redirect('/books');
        }
        return (new View())->render('site.addInLibraryCard', ['library_cards' => $library_cards, 'users' => $users, 'books' => $books]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/login');
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
