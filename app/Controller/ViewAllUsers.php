<?php

namespace Controller;

use Model\User;
use Src\Request;
use Src\View;

class ViewAllUsers
{
    public function showUsers(Request $request): string
    {
        $users = User::all();
        return (new View())->render('site.showUsers', ['users' => $users]);
    }
}