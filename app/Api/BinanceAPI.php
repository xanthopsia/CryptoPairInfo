<?php

declare(strict_types=1);

namespace App\Api;

use App\CryptoPair;

class BinanceAPI
{
    const API_URL = "https://api4.binance.com/api/v3/ticker/24hr?symbol=";

    public function getTickerData(CryptoPair $cryptoPair): array
    {
        $apiUrl = self::API_URL . $cryptoPair->getSymbol();
        $response = file_get_contents($apiUrl);

        if (!$response) {
            exit ("Failed to make API request for {$cryptoPair->getSymbol()}\n");
        }
        return json_decode($response, true);
    }
}
