<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index') -> name('drink-index');

Route::get('/drink/{id}', 'MainController@show') -> name('drink-show');

Route::get('/new/drink', 'MainController@create') -> name('create-drink');
Route::post('/store/drink', 'MainController@store') -> name('store-drink');

Route::get('/edit/{id}', 'MainController@edit') -> name('edit-drink');
Route::post('/update/{id}', 'MainController@update') -> name('update-drink');
