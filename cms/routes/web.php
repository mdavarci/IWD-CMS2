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

Route::get('/', 'PostsController@index')->name('home');
// Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}/edit', 'PostsController@edit')->middleware('role:Editor');
// Route::patch('/posts/{post}/edit', 'PostsController@edit');
// Route::post('/posts', 'PostsController@store');
// Route::get('/posts/{post}', 'PostsController@show');


Route::resource('/posts/{post}/comments', 'CommentsController');
Route::get('/posts/{post}/comments', 'CommentsController@edit');
// Route::patch('/comments/{id}', 'CommentController@patch')->name('comment.update');

// Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::resource('/menus', 'MenuController');
Route::get('/menus', 'MenuController@index')->middleware('role:Admin');

Route::resource('/pages', 'PagesController');
