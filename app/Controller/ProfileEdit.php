<?php

namespace Controller;

use Model\Books;
use Model\LibraryCard;
use Model\User;
use Src\Request;
use Src\Validator\Validator;
use Src\View;

class ProfileEdit
{
    public function profileEdit(Request $request): string
    {
        $library_cards = LibraryCard::where('id', $request->id)->get();
        $books = Books::all();
        $users = User::all();
        if ($request->method === 'POST'){

            $validator = new Validator($request->all(), [
                'passed' => ['required'],
            ], [
                'required' => 'Поле :field пусто',
            ]);

            if($validator->fails()){
                return new View('site.profileEdit',
                    [
                        'books' => $books,
                        'library_cards' => $library_cards,
                        'message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE),]);
            }

            if (LibraryCard::create($request->all())) {
                app()->route->redirect('/profile');
            }
        }
        return (new View())->render('site.profileEdit', [
            'users' => $users,
            'library_cards' => $library_cards,
            'books' => $books,
        ]);
    }
}