<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

class Taxi implements Estimable
{
    const PRICE_PER_KILOMETER = 2;
    public function travelCost(int $distance)
    {
        return $distance * self::PRICE_PER_KILOMETER;
    }
}
