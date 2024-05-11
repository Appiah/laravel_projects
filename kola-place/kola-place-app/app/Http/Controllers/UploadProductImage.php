<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadProductImage extends Controller{
    
    public function uploadProductImage(){
        return view('uploadproductimage');
    }

    public function processProductImageBaseOnRequest(Request $request){

        $incomingFields = $request->all();

        $productId = $incomingFields['productId'];//NOT SET BY THE USER, it is fetched by extension from the product created by the merchant

        $imagePathType = $incomingFields['imagePathType'];//MANDATORY : and it would be fetched based on the path type specified by the user [ LOCAL_FOLDER => 0, ONLINE_PATH => 1 ]
        $imagePath = $incomingFields['imagePath'];//MANDATORY : and it would be fetched based on the path type
        
        $imageDescriptionLocale = $incomingFields['imageDescriptionLocale'];//default : "en";
        $imageDescription = $incomingFields['imageDescription'];//OPTIONAL : should not be more than 100 characters
        $imageAltContent = $incomingFields['imageAltContent'];//OPTIONAL : should not be more than 20 characters
        
        $userId = $incomingFields['userId'];//NOT ACCESSIBLE BY THE USER, Is automatically fetched from session securedly
        $merchantId = $incomingFields['merchantId'];//NOT ACCESSIBLE BY THE USER, Is automatically fetched from session securedly

    }

}
