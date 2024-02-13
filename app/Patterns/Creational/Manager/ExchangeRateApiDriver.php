<?php

namespace App\Patterns\Creational\Manager;

interface ExchangeRateApiDriver
{
    public function exchangeRate(string $from, string $to);
}
