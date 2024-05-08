<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function(){
    return "<h1>Hello World...</h2>";//view('home');
});