<?php

namespace App\Patterns\Manager;

use Illuminate\Support\Manager;

class ExchangeRatesManager extends Manager
{
    public function createFixerIoDriver(): ExchangeRateApiDriver
    {
        return new FixerIoDriver();
    }

    public function createOpenExchangeRatesDriver(): ExchangeRateApiDriver
    {
        return new OpenExchangeRatesDriver();
    }

    public function getDefaultDriver()
    {
        return $this->config->get('exchange-rates.driver', 'fixer-io');
    }
}
