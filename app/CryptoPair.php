<?php

declare(strict_types=1);

namespace App;

class CryptoPair
{
    private string $baseCurrency;
    private string $quoteCurrency;
    private string $symbol;
    private string $lastPrice;
    private string $highPrice;
    private string $lowPrice;
    private string $volume;

    public function __construct(string $baseCurrency, string $quoteCurrency = 'BTC')
    {
        $this->baseCurrency = $baseCurrency;
        $this->quoteCurrency = $quoteCurrency;
        $this->symbol = $this->baseCurrency . $this->quoteCurrency;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function setTickerData(array $data): void
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
