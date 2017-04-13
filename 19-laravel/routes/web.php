<?php

Route::get('/', function () {
    return view('home', ['foo' => 'bar']);
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('post', 'PostController@index');

Auth::routes();

// Route::get('/post', 'PostController@index');
// Route::get('/post/create', 'PostController@create')->name('post.add');
// Route::post('/post/create', 'PostController@store')->name('post.add');
Route::resource('posts', 'PostController');
Route::get('posts/{post}/delete', 'PostController@destroy')->name('posts.destroy');
