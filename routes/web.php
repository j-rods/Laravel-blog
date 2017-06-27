<?php

// Bind into the container
// Allows to register any key into the container
// and then associate that with some value
App::bind('App\Billing\Stripe', function () {
    // return a new instance of stripe class
    return new \App\Billing\Stripe(config('services.stripe.secret')); // pass through a secret key
});

// resolve that instance out of the container
$stripe = App::make('App\Billing\Stripe');

dd($stripe);


// when you visit the homepage, all posts are loaded
Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

