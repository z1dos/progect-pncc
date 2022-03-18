<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add('GET', '/books', [Controller\Site::class, 'books']);
Route::add('GET', '/showUsers', [Controller\Site::class, 'showUsers']);
//Route::add('GET', '/posts', [Controller\Site::class, 'index']);
Route::add(['GET', 'POST'], '/addBooks', [Controller\Site::class, 'addBooks']);
Route::add(['GET', 'POST'], '/addInLibraryCard', [Controller\Site::class, 'addInLibraryCard']);
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);