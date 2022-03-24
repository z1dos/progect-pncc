<?php

namespace Controller;
use Model\Books;
use Model\LibraryCard;
use Src\Request;
use Src\View;

class VIewBooks
{
    public function books(Request $request): string
    {
        $libraryCards = LibraryCard::all();
        $books = Books::all();
        return (new View())->render('site.books', ['books' => $books, 'libraryCards' =>$libraryCards]);
    }
}