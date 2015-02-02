<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'BooksController@create');
Route::post('/', array('before'=>'csrf', 'uses'=>'BooksController@store'));
Route::get('/books', array('before'=>'auth', 'uses'=>'BooksController@index'));
Route::get('/book/{id}', array('before'=>'auth', 'uses'=>'BooksController@show'));
//Authentication
Route::get('/user/login', 'UsersController@getLogin');
Route::post('/user/login', array('before'=>'csrf', 'uses'=>'UsersController@postLogin'));
//Logout
//Route::get('/user/logout', 'UserController@logout');


