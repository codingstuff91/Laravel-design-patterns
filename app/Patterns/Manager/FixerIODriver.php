<?php

namespace App\Patterns\Manager;

use Carbon\CarbonInterface;

class FixerIODriver implements ExchangeRateApiDriver
{
    public function exchangeRate(string $from, string $to)
    {
        return var_dump('Calculate rate from Fixer IO driver');
    }
}
