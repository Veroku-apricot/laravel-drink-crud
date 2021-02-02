<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index') -> name('drink-index');

Route::get('/drink/{id}', 'MainController@show') -> name('drink-show');

Route::get('/new/drink', 'MainController@create') -> name('create-drink');

Route::post('/store/drink', 'MainController@store') -> name('store-drink');
