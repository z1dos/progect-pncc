<?php

namespace Controller;
use Model\Books;
use Src\Request;
use Src\View;

class VIewBooks
{
    public function books(Request $request): string
    {
        $books = Books::all();
        return (new View())->render('site.books', ['books' => $books]);
    }
}