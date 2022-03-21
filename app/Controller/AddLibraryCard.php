<?php

namespace Controller;

use Model\Books;
use Model\LibraryCard;
use Model\User;
use Src\Request;
use Src\View;

class AddLibraryCard
{
    public function addInLibraryCard(Request $request): string
    {
        $users = User::all();
        $books = Books::all();
        $library_cards = LibraryCard::all();
        if ($request->method === 'POST' && LibraryCard::create($request->all())) {
            app()->route->redirect('/showUsers');
        }
        return (new View())->render('site.addInLibraryCard', ['library_cards' => $library_cards, 'users' => $users, 'books' => $books]);
    }
}