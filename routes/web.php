<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.index');
})
->name("home")
;

Route::get('/shop', function () {
    return view('main.shop');
})
->name("shop")
;

Route::get('/contact', function () {
    return view('main.contact');
})
->name("contact")
;