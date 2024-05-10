<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller{
    
    public function getAllProducts() {
        return view('products');
    }

    public function getProductDetails($id) {
        return view('productdetails');
    }

}
