<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

class Bike implements CalculationStrategy
{
    public function travelCost(int $distance)
    {
        return 0;
    }
}
