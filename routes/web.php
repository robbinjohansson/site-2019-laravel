<?php

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PostController@index')->name('posts.index');
Route::get('/posts/{post}', 'PostController@show')->where('post', '(.*)')->name('posts.show');
Route::get('/archive', 'PostController@archive')->name('posts.archive');

Route::get('/about', function () {
    return view('about.index');
})->name('about');
