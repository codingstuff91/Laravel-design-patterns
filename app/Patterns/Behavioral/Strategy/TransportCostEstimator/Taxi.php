<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

class Taxi implements Transportable
{
    private const PRICE_PER_KILOMETER = 2;

    public function getCost(int $distance)
    {
        return $distance * self::PRICE_PER_KILOMETER;
    }
}
