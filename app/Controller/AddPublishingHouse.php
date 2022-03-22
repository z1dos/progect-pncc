<?php

namespace Controller;

use Model\PublishingHouse;
use Src\Request;
use Src\View;

class AddPublishingHouse
{
    public function addPublishingHouse(Request $request): string
    {
        $publishing_house = PublishingHouse::all();
        if ($request->method === 'POST' && PublishingHouse::create($request->all())) {
            app()->route->redirect('/addBooks');
        }
        return (new View())->render('site.addPublishingHouse', ['publishing_house' => $publishing_house]);
    }
}