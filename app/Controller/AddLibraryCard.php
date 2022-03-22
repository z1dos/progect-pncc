<?php

namespace Controller;

use Model\Books;
use Model\LibraryCard;
use Model\User;
use Src\Request;
use Src\Validator\Validator;
use Src\View;

class AddLibraryCard
{

    public function addInLibraryCard(Request $request): string
    {
        $users = User::all();
        $books = Books::all();
        $library_cards = LibraryCard::all();
        if ($request->method === 'POST'){

            $validator = new Validator($request->all(), [
                'id_reader' => ['required'],
                'id_book' => ['required'],
                'date_of_receiving' => ['required'],
                'delivery_date' => ['required'],
            ], [
                'required' => 'Поле :field пусто',
            ]);

            if($validator->fails()){
                return new View('site.addInLibraryCard',
                    [
                        'library_cards' => $library_cards,
                        'users' => $users, 'books' => $books,
                        'message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }

            if (LibraryCard::create($request->all())){
                    app()->route->redirect('/showUsers');
            }
        }
        return (new View())->render('site.addInLibraryCard', [
            'library_cards' => $library_cards,
            'users' => $users, 
            'books' => $books]);
    }
}