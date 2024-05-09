<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return "<head><title>Larapost App</title></head><h1>Hello World...123</h2>";//view('home');
});

Route::get('/login', function(Request $request){

});

Route::get('/view_all_posts', function(Request $request){
    //ddd($request);
    var_dump($request);
    echo "<p>";
    $arr = [1,2,3,4];
    print_r($arr);
});