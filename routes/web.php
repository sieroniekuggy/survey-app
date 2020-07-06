<?php

use Illuminate\Support\Facades\Route;


Route::get('/about', 'HelloController@about');

Route::get('/service', 'ServiceController@index');
Route::post('/service', 'ServiceController@store');

Route::get('/customers', 'CustomerController@index');
Route::get('/customers/create', 'CustomerController@create');
Route::post('/customers', 'CustomerController@store');
Route::get('/customers/{customerId}', 'CustomerController@show');