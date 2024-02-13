<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

class Bike implements Estimable
{
    const AVERAGE_SPEED = 15;
    public function travelCost(int $distance)
    {
        return 0;
    }
}
