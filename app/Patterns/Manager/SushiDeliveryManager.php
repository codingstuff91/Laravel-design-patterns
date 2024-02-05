<?php

namespace App\Patterns\Manager;

use Illuminate\Support\Manager;

class SushiDeliveryManager extends Manager
{
    public function createCarDriver()
    {
        return new CarDriver();
    }

    public function createBikeDriver()
    {
        return new BikeDriver();
    }

    public function getDefaultDriver(): string
    {
        return 'car';
    }
}
