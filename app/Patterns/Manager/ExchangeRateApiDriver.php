<?php

namespace App\Patterns\Manager;

interface ExchangeRateApiDriver
{
    public function exchangeRate(string $from, string $to);
}
