<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller{
    
    public function getAllProductsForVueJS(){

        $products = Product::all();

        return response()->json([
            'products' => $products
        ], 200);

    }

    public function getAllProducts(){
        $products = Product::all();
        return view('productslist', ['products' => $products]);
    }

    public function getProductDetails($id){
        return view('productdetails');
    }

}
