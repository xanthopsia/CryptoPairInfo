<?php

namespace App;
class CryptoPair
{
    private $baseCurrency;
    private $quoteCurrency;
    private $symbol;
    private $lastPrice;
    private $highPrice;
    private $lowPrice;
    private $volume;

    public function __construct($baseCurrency, $quoteCurrency = 'BTC')
    {
        $this->baseCurrency = $baseCurrency;
        $this->quoteCurrency = $quoteCurrency;
        $this->symbol = $this->baseCurrency . $this->quoteCurrency;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function setTickerData($data): void
    {
        $this->lastPrice = $data['lastPrice'];
        $this->highPrice = $data['highPrice'];
        $this->lowPrice = $data['lowPrice'];
        $this->volume = $data['volume'];
    }

    public function getLastPrice(): string
    {
        return $this->lastPrice;
    }

    public function getHighPrice(): string
    {
        return $this->highPrice;
    }

    public function getLowPrice(): string
    {
        return $this->lowPrice;
    }

    public function getVolume(): string
    {
        return $this->volume;
    }
}
