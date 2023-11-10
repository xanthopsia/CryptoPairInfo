<?php

declare(strict_types=1);

namespace App\Collection;

use App\CryptoPair;

class CryptoPairCollection
{
    private array $cryptoPairs;

    public function __construct()
    {
        $this->cryptoPairs = [];
    }

    public function addCryptoPair(CryptoPair $cryptoPair): void
    {
        $this->cryptoPairs[] = $cryptoPair;
    }

    public function get(): array
    {
        return $this->cryptoPairs;
    }
}
