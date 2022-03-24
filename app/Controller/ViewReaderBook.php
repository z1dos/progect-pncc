<?php

namespace Controller;

use Model\LibraryCard;
use Model\User;
use Src\Request;
use Src\View;

class ViewReaderBook
{
    public function ViewShowUsers(Request $request): string
    {
        $libraryCards = LibraryCard::where('id_book', $request->id_book)->get();
        return (new View())->render('site.viewReaderBook', ['libraryCards' => $libraryCards]);
    }
}