<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceItemController;


/*Route::middleware('auth:sanctum')->get('/user', function(Request $request){
    return $request->user();
});*/

Route::get('/get_all_invoice', [InvoiceController::class, 'getAllInvoices']);


#API provisional application programming interfaces
Route::get('/products', [ProductController::class, 'getAllProducts']);


Route::get('/products/:id', [ProductController::class, 'getProductDetails($id)']);


Route::get('/invoices', [InvoiceController::class, 'getAllInvoicesView']);
    //Create a page to list all available invoices that are retrieved from the API endpoint
    

Route::get('/invoices/:id', [InvoiceItemController::class, 'getInvoiceItem($id)']);
    //When an invoice item is clicked, it should display a details page which pulls information from here
  