<?php

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PostController@index')->name('posts.index');
Route::get('/posts/{post}', 'PostController@show')->where('post', '(.*)')->name('posts.show');
