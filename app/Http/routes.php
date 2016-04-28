<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();

Route::get('/', 'PostsController@getIndex');
Route::get('new', ['middleware' => 'auth', 'uses' => 'PostsController@getNew']);
Route::get('edit/{id}', ['middleware' => 'auth', 'uses' => 'PostsController@getEdit']);
Route::get('delete/{id}', ['middleware' => 'auth', 'uses' => 'PostsController@delete']);


Route::post('new', ['middleware' => 'auth', 'uses' => 'PostsController@postNew']);
Route::post('edit', ['middleware' => 'auth', 'uses' => 'PostsController@postEdit']);
