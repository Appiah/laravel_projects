<?php

use GuzzleHttp\Client;

class PullImageForProduct extends GuzzleHttp\Client{

    public function pullImageForProduct(string $imageUrl){
        
        $client = new Client();

        try {
            $response = $client->get($imageUrl, [
            'headers' => [
                // Add any necessary headers (e.g., authorization)
                'X-API-KEY' => env('API_KEY_NINJA_IMAGES')
            ]
            ]);

            $imageContent = $response->getBody()->getContents();

            // Handle the image content (save to file, display inline, etc.)

        } catch (Exception $e) {
            // Handle potential errors
        }
    }

    public function pullImageForProductDef(){
        $imageUrl = env('API_URL_NINJA_IMAGES');
        $client = new Client();

        try {
            $response = $client->get($imageUrl, [
            'headers' => [
                // Add any necessary headers (e.g., authorization)
                'X-API-KEY' => env('API_KEY_NINJA_IMAGES')
            ]
            ]);

            $imageContent = $response->getBody()->getContents();

            // Handle the image content (save to file, display inline, etc.)

            //return $imageContent;
            return $response;

        } catch (Exception $e) {
            // Handle potential errors
        }
        return $response;
    }

}