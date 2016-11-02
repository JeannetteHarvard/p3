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

Route::get('/debug', function () {
  dd(Lipsum::html());
  Lipsum::headers()->link()->ul()->html(5);

    return 'testing';
});


Route::get('/lorem-ipsum', 'LoremIpsumController@index')->name('lorem-ipsum');
Route::post('/lorem-ipsum/generate', 'LoremIpsumController@generate')->name('lorem-ipsum.generate');

Route::get('/random-user', 'RandomUserController@index')->name('random-user');
Route::post('/random-user/generate', 'RandomUserController@generate')->name('random-user.generate');
