<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadProductImage extends Controller{
    
    public function uploadProductImage(){
        return view('uploadproductimage');
    }

    public function processProductImageBaseOnRequest(Request $request){

        //To validate the route & url path : 
            //if ($request->is('admin/*'))
            //if ($request->routeIs('admin.*'))
            //$url = $request->url();
            //$urlWithQueryString = $request->fullUrl();

        //$ipAddresses = $request->ips();//returns an array of IP addresses, and the last one is the client IP address

        //if ($request->expectsJson()) {}
        
        $incomingFields = $request->all();

        //Remember to put variables here to check for the presence of the required fields
        //And use these variables to send feedback to the user and also to process the upcoming request

        if($request->has('product_id')){
            $productId = $incomingFields['productId'];//NOT SET BY THE USER but HIGHLY REQUIRED, it is fetched by extension from the product created by the merchant
        }

        if($request->has('imagePathType') && $request->has('imagePath')){
            $imagePathType = $incomingFields['imagePathType'];//MANDATORY : and it would be fetched based on the path type specified by the user [ LOCAL_FOLDER => 0, ONLINE_PATH => 1 ]
            $imagePath = $incomingFields['imagePath'];//MANDATORY : and it would be fetched based on the path type
        

            if($imagePathType=='0' && $request->hasFile('imagePath')){//remember to validate the image extention : JPG, JPEG, PNG only
                //implies we are good to upload

                $file = $request->file('imagePath');

                if($file->isValid()){//if the upload of the file was successful

                    $path = $request->imagePath->path();

                    $extension = $request->imagePath->extension();

                    //Storing the uploaded file :
                        //the system would generate a unique filename
                        $path = $request->imagePath->store('imagesFolder'); // a unique ID will automatically be generated to serve as the filename.

                        //a customised filename would have to be inplace
                        $fileNm = rand(1111111,9999999) . '_' . now() . '_' . $extension;
                        $path = $request->imagePath->storeAs('imagesFolder', $fileNm);

                }

            }else{//check to be sure if we are supposed to pull the image from online





            }


        }
        $imageDescriptionLocale = $incomingFields['imageDescriptionLocale'];//OPTIONAL : default : "en";
        $imageDescription = $incomingFields['imageDescription'];//OPTIONAL : should not be more than 100 characters
        $imageAltContent = $incomingFields['imageAltContent'];//OPTIONAL : should not be more than 20 characters
        
        $userId = $incomingFields['userId'];//NOT ACCESSIBLE BY THE USER, Is automatically fetched from session securedly
        $merchantId = $incomingFields['merchantId'];//NOT ACCESSIBLE BY THE USER, Is automatically fetched from session securedly

    }

}
