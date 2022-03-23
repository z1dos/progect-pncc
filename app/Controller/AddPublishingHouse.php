<?php

namespace Controller;

use Src\Validator\Validator;
use Model\PublishingHouse;
use Src\Request;
use Src\View;

class AddPublishingHouse
{
    public function addPublishingHouse(Request $request): string
    {
        if ($request->method === 'POST'){

            $validator = new Validator($request->all(), [
                'title_publishing_house' => [
                    'required',
                    'unique:publishing_houses,title_publishing_house',
                    'PubHouseRegex',
                ],
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально',
                'PubHouseRegex' => 'Поле :field должно начинаться с боьшой буквы, можно ставить пробел, можно использовать символы _!#'

            ]);

            if($validator->fails()){
                return new View('site.addPublishingHouse',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }

            if(PublishingHouse::create($request->all())) {
                app()->route->redirect('/addPublishingHouse');
            }
        }
        return (new View())->render('site.addPublishingHouse');
    }
}