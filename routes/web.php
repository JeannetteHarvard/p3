<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as'=>'HomePage', function () {
    return view('index');
}]);

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/lorem-ipsum', 'LoremIpsumController@index')->name('lorem-ipsum');
Route::get('/random-user', 'RandomUserController@index')->name('random-user');
