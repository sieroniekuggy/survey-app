<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {

    $coolString = 'Hello from Routes again';
    //using data array
        // return view('subviews.hello', [
        //     'coolString'=>$coolString
        // ]);

    //As an alternative to passing a complete array of data to the view helper function,
    //you may use the with method to add individual pieces of data to the view:
    //return view('subviews.hello')->with('someData', 'returned using with method.');

    //using compact method if you have variable and string with same name
    return view('subviews.hello')->with(compact('coolString'));
});
