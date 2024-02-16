<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

class Bus implements Transportable
{
    public function getCost(int $distance): int
    {
        return 3;
    }
}
