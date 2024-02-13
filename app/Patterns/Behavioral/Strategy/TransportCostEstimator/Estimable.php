<?php

namespace App\Patterns\Behavioral\Strategy\TransportCostEstimator;

interface Estimable
{
    public function travelCost(int $distance);
}
