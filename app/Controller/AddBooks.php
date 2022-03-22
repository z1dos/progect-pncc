<?php

namespace Controller;

use Model\Books;
use Model\PublishingHouse;
use Src\Request;
use Src\View;

class AddBooks
{
    public function addBooks(Request $request): string
    {
        $books = Books::all();
        $publishing_house = PublishingHouse::all();
        if ($request->method === 'POST' && Books::create($request->all())) {
            app()->route->redirect('/books');
        }
        return (new View())->render('site.addBook', ['books' => $books, 'publishing_house' => $publishing_house]);
    }
}