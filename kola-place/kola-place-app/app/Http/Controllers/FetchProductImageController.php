<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FetchProductImage;

class FetchProductImageController extends Controller{
    
    public function getProductImages(){
        $product_images=FetchProductImage::all();
        return response()->json([
            'product_images' => $product_images
        ],200);
    }

}
