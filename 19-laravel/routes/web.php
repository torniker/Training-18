<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function() {
    return view('about');
});
