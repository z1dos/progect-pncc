<?php

namespace Controller;
use Model\Books;
use Model\LibraryCard;
use Model\PublishingHouse;
use Model\User;
use Src\Request;
use Src\View;

class VIewBooks
{
    public function books(Request $request): string
    {
        $books = Books::all();
        return (new View())->render('site.books', ['books' => $books]);
    }

    public function addBooks(Request $request): string
    {
        $books = Books::all();
        $publishing_house = PublishingHouse::all();
        if ($request->method === 'POST' && PublishingHouse::create($request->all())) {
            app()->route->redirect('/addBooks');
        }
        if ($request->method === 'POST' && Books::create($request->all())) {
            app()->route->redirect('/books');
        }
        return (new View())->render('site.addBook', ['books' => $books, 'publishing_house' => $publishing_house]);
    }
}