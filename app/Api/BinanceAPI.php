<?php

declare(strict_types=1);

namespace App\Api;

use App\CryptoPair;
use GuzzleHttp\Client;

class BinanceAPI
{
    private Client $client;
    const API_URL = "https://api4.binance.com/api/v3/ticker/24hr?symbol=";

    public function __construct()
    {
        $this->client = new Client([
            'verify' => false
        ]);
    }

    public function getTickerData(CryptoPair $cryptoPair): array
    {
        $apiUrl = self::API_URL . $cryptoPair->getSymbol();
        $response = $this->client->get($apiUrl);

        return json_decode((string)$response->getBody(), true);
    }
}
