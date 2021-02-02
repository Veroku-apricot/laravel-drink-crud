<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index') -> name('drink-index');

Route::get('/drink/{id}', 'MainController@show') -> name('drink-show');
