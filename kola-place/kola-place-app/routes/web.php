<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return "<head><title>Larapost App</title></head><h1>Hello World...123</h2>";//view('home');
});

Route::get('/signup', function(Request $request){

});

Route::get('/signup/auth/google', function(Request $request){

});

Route::get('/signup/auth/x', function(Request $request){

});

Route::get('/signup/auth/meta', function(Request $request){

});

Route::get('/signup/auth/linkedin', function(Request $request){

});

Route::get('/login', function(Request $request){

});

Route::get('/logout', function(Request $request){

});

Route::get('/view_all_products', function(Request $request){
    
});

Route::get('/view_all_invoices', function(){
    return view('invoicelisttest');
});
  

Route::get('/{pathMatch}', function(){
    return view('welcome');
})->where('pathMatch', '.*');