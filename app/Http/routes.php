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

Route::group(['middleware' => 'auth'], function()
{
  Route::get('new', 'PostsController@getNew');
  Route::get('edit/{id}', 'PostsController@getEdit')->where('id', '[0-9]+');
  Route::get('delete/{id}', 'PostsController@delete')->where('id', '[0-9]+');

  Route::post('new', 'PostsController@postNew');
  Route::post('edit', 'PostsController@postEdit');
});
