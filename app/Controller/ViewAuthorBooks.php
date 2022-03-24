<?php

namespace Controller;

use Model\Books;
use Src\Request;
use Src\View;

class ViewAuthorBooks
{
    public function viewAuthorBooks(Request $request): string
    {
        $books = Books::where('author', $request->author)->get();
        return (new View())->render('site.viewAuthorBooks', ['books' => $books]);
    }
}