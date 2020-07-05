<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', 'HelloController@about');
Route::get('/services', 'HelloController@services');