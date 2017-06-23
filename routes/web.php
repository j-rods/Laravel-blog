<?php

// when you visit the homepage, all posts are loaded
Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::get('/register', 'RegistrationController@create');
Route::get('/login', 'SessionsController@create');

