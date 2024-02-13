<?php

namespace App\Patterns\Creational\Manager;

class OpenExchangeRatesDriver implements ExchangeRateApiDriver
{
    public function exchangeRate(string $from, string $to)
    {
        return var_dump('Calculate rate from Open exchange rate driver');
    }
}
