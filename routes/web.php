<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.index');
});

Route::get('/shop', function () {
    return view('main.shop');
});

Route::get('/contact', function () {
    return view('main.contact');
});