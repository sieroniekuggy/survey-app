<?php

use Illuminate\Support\Facades\Route;


Route::get('/about', 'HelloController@about');

Route::get('/service', 'ServiceController@index');
Route::post('/service', 'ServiceController@store');

Route::get('/customer', 'CustomerController@index');
Route::get('/customer/create', 'CustomerController@create');
Route::post('/customer', 'CustomerController@store');