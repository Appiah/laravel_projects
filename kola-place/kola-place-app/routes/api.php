<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Request;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceItemController;


/*Route::middleware('auth:sanctum')->get('/user', function(Request $request){
    return $request->user();
});*/

Route::get('/postmantest', function(Request $request){
    return response()->json(
        ['key_dummy' => "value_dummy"],
        200
    );
});

Route::get('/get_all_invoice', [InvoiceController::class, 'getAllInvoices']);


Route::get('/products', [ProductController::class, 'getAllProducts']);


Route::get('/productsOnly', [ProductController::class, 'getAllProductsForVueJS']);


Route::get('/products/:id', [ProductController::class, 'getProductDetails($id)']);


//Create a page to list all available invoices that are retrieved from the API endpoint
Route::get('/invoices', [InvoiceController::class, 'getAllInvoicesView']);
    
    
//When an invoice item is clicked, it should display a details page which pulls information from here
Route::get('/invoices/:id', [InvoiceItemController::class, 'getInvoiceItem($id)']);

Route::get('/getproductimagerand', [PullImageForProduct::class, 'pullImageForProductDef']);
    
  