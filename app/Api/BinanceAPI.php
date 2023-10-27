<?php

namespace App\Api;

use App\CryptoPair;

class BinanceAPI
{
    private $apiUrl = "https://api4.binance.com/api/v3/ticker/24hr?symbol=";

    public function getTickerData(CryptoPair $cryptoPair): array
    {
        $apiUrl = $this->apiUrl . $cryptoPair->getSymbol();
        $response = file_get_contents($apiUrl);

        if (!$response) {
            exit ("Failed to make API request for {$cryptoPair->getSymbol()}\n");
        }
        return json_decode($response, true);
    }
}
