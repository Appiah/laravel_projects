<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceItemController;

Route::get('/', function () {
    return view('invoiceslistviavuejs');
});

Route::get('/view_all_products', function(Request $request){
    return view('productslist');
});

Route::get('/view_all_invoices', function(){
    return view('invoicelisttest');
});

Route::get('/view_invoices_list_preview', function(){
    return view('productslist');
});
  

Route::get('/{pathMatch}', function(){
    return view('productslistviavuejs');
})->where('pathMatch', '.*');


//Later to be developed
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

