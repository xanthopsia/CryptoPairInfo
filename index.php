<?php

use App\Api\BinanceAPI;
use App\Collection\CryptoPairCollection;
use App\CryptoPair;

require_once('vendor/autoload.php');

$cryptoPairCollection = new CryptoPairCollection();

$numPairs = (int)readline("Enter the number of cryptocurrency pairs to fetch: ");

for ($i = 1; $i <= $numPairs; $i++) {
    $input = readline("Enter the first part of cryptocurrency pair #$i (e.g., ETH for ETHBTC): ");
    $cryptoPair = new CryptoPair($input);
    $cryptoPairCollection->addCryptoPair($cryptoPair);
}

$binanceAPI = new BinanceAPI();

foreach ($cryptoPairCollection->get() as $cryptoPair) {
    $tickerData = $binanceAPI->getTickerData($cryptoPair);

    $cryptoPair->setTickerData($tickerData);
    echo "Symbol: " . $cryptoPair->getSymbol() . "\n";
    echo "Last Price: " . $cryptoPair->getLastPrice() . "\n";
    echo "24h High: " . $cryptoPair->getHighPrice() . "\n";
    echo "24h Low: " . $cryptoPair->getLowPrice() . "\n";
    echo "24h Volume: " . $cryptoPair->getVolume() . "\n";
    echo "==================== \n";
}
