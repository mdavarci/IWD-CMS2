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
Route::resource('/posts', 'PostsController');
Route::resource('/pages', 'PagesController');
Route::resource('/posts/{post}/comments', 'CommentsController');
Route::resource('/menus', 'MenuController');

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/{post}/edit', 'PostsController@edit')->middleware('role:Editor');

Route::get('/posts/{post}/comments', 'CommentsController@edit');
Route::get('/posts/{post}/comments', 'CommentsController@destroy');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');


Route::get('/menus', 'MenuController@index')->middleware('role:Admin');
Route::get('/pages/{page}/edit', 'PagesController@edit')->middleware('role:Admin');
Route::get('/pages/{page}/destroy', 'PagesController@destroy');

