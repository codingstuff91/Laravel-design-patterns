<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

class Bike implements Transportable
{
    public function getCost(int $distance)
    {
        return 0;
    }
}
