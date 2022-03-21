<?php

namespace Controller;

use Model\Books;
use Model\LibraryCard;
use Model\User;
use Src\Request;
use Src\View;

class ViewProfiles
{
    public function selfProfile(Request $request): string
    {
        $users = User::all();
        return (new View())->render('site.selfProfile', ['users' => $users]);
    }

    public function profile(Request $request): string
    {
        $library_cards = LibraryCard::where('id_reader', $request->id_reader)->get();
        $books = Books::all();
        $users = User::all();
        return (new View())->render('site.profile', [
            'users' => $users,
            'library_cards' => $library_cards,
            'books' => $books,
        ]);
    }

    public function showUsers(Request $request): string
    {
        $users = User::all();
        return (new View())->render('site.showUsers', ['users' => $users]);
    }
}