<?php

namespace App\Patterns\Creational\Manager;

class FixerIODriver implements ExchangeRateApiDriver
{
    public function exchangeRate(string $from, string $to)
    {
        return var_dump('Calculate rate from Fixer IO driver');
    }
}
