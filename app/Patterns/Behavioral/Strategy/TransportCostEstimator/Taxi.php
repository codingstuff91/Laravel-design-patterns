<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

class Taxi implements Transportable
{
    public function getCost(int $distance) : int
    {
        return $distance * 2;
    }
}
