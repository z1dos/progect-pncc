<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add('GET', '/books', [Controller\Site::class, 'books']);
Route::add('GET', '/profile', [Controller\Site::class, 'profile']);
Route::add('GET', '/selfProfile', [Controller\Site::class, 'selfProfile']);
Route::add('GET', '/showUsers', [Controller\Site::class, 'showUsers'])
    ->middleware('auth');
//Route::add('GET', '/showUsers?id=', [Controller\Site::class, 'showUsersFOrId']);
//Route::add('GET', '/posts', [Controller\Site::class, 'index']);
Route::add(['GET', 'POST'], '/addBooks', [Controller\Site::class, 'addBooks'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/addInLibraryCard', [Controller\Site::class, 'addInLibraryCard']);
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);