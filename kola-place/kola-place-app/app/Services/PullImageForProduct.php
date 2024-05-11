<?php

use GuzzleHttp\Client;

class PullImageForProduct extends GuzzleHttp\Client{

    public function pullImageForProduct(string $imageUrl){
    $client = new Client();

    try {
        $response = $client->get($imageUrl, [
        'headers' => [
            // Add any necessary headers (e.g., authorization)
        ]
        ]);

        $imageContent = $response->getBody()->getContents();

        // Handle the image content (save to file, display inline, etc.)

    } catch (Exception $e) {
        // Handle potential errors
    }
    }

}