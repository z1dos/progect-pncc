<?php

namespace Controller;

use Model\Books;
use Model\PublishingHouse;
use Src\Request;
use Src\Validator\Validator;
use Src\View;

class AddBooks
{
    public function addBooks(Request $request): string
    {
        $books = Books::all();
        $publishing_house = PublishingHouse::all();
        if ($request->method === 'POST') {
            $validator = new Validator($request->all(), [
                'author' => ['required', 'AuthorRegex'],
                'title' => ['required', 'nameVal'],
                'the_year_of_publishing' => ['required'],
                'is_it_a_new_edition' => ['required'],
                'description' => ['required'],
                'price' => ['required'],
            ], [
                'AuthorRegex' => 'Поле :field должно записываться Автор и инициалы',
                'nameVal' => 'Поле :field должно начинаться с большой буквы',
                'required' => 'Поле :field пусто',
            ]);

            if($validator->fails()){
                return new View('site.addBook',
                    [
                        'books' => $books,
                        'publishing_house' => $publishing_house,
                        'message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE),]);
            }

            if (Books::create($request->all())) {
                app()->route->redirect('/books');
            }
        }
        return (new View())->render('site.addBook', ['books' => $books, 'publishing_house' => $publishing_house]);
    }
}