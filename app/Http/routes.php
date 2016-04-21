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

Route::get('/', 'PostsController@getIndex');
Route::get('new', 'PostsController@getNew');
Route::get('edit/{id}', 'PostsController@getEdit');


Route::post('new', 'PostsController@postNew');
Route::post('edit', 'PostsController@postEdit');
