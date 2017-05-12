<?php


Route::get('/', 'HomeController@index');

Route::get('/post/{id}', 'PostController@index');

Route::get('/categories/{id}', 'CategoriesController@index');

Route::get('/authors', function () {
    return view('authors');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
