<?php

Route::get('/', 'PostController@index')->name('posts.index');

Route::get('/about', function () {
    return view('pages.about.index');
})->name('about.index');

Route::get('/archive', 'ArchiveController@index')->name('archive.index');

Route::get('/{post}', 'PostController@show')->name('posts.show');
