<?php

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('about.index', ['title' => 'About']);
})->name('about');

Route::get('/archive', 'ArchiveController@index')->name('archive');

Route::get('/', 'PostController@index')->name('posts.index');
Route::get('/{post}', 'PostController@show')->name('posts.show');
