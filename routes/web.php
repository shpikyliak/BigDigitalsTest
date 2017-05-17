<?php

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
Route::get('/', function (){return redirect('/api/users');});
Route::get('/api/users', 'UserController@index');
Route::post('/api/users', 'UserController@store');
Route::get('/api/users/search/{name}', 'UserController@search');
Route::get('/createSearch', 'UserController@createSearch');
Route::get('/create', 'UserController@create');
Route::get('/api/users/{id}', 'UserController@edit');
Route::put('/api/users/{id}', 'UserController@update');
Route::delete('/api/users/{id}', 'UserController@destroy');

