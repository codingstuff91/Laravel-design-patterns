<?php

namespace App\Patterns\Manager;

use Carbon\CarbonInterface;

class OpenExchangeRatesDriver implements ExchangeRateApiDriver
{
    public function exchangeRate(string $from, string $to)
    {
        return var_dump('Calculate rate from Open exchange rate driver');
    }
}
