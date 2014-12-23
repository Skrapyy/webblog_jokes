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

Route::get('/','HomeController@showWelcome');
Route::get('/','PublicationsController@getPublications');


Route::post('addPublication','PublicationsController@putPublications');
Route::post('editPublication','PublicationsController@editPublications');
Route::post('deletePublication','PublicationsController@deletePublications');
Route::post('editPublication','HomeController@showEdit');
Route::post('editDone','HomeController@setEdit');

Route::post('addComment','PublicationsController@putComments');
Route::post('editPublication','PublicationsController@editComment');
Route::post('deleteComment','PublicationsController@deleteComment');
Route::post('editComment','HomeController@showEditComment');
Route::post('editDoneComment','HomeController@setEditComment');

